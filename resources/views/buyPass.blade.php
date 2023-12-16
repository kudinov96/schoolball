@extends('layouts.app')

@section('content')
<link rel="stylesheet" type="text/css" href="https://jquery-ui-bootstrap.github.io/jquery-ui-bootstrap/css/custom-theme/jquery-ui-1.10.3.custom.css" />

<div class="topPartsGrayForAuth">
</div>
<div class="container" id="lightbox">
  <div class="row">
    <div class="col-12 text-center AuthH3" style="margin-bottom: 20px;">
      <h3>Покупка абонемента</h3>
    </div>
    <div class="col-12">
      <div class="row justify-content-center">
        <div class="col-10 card-new" style="min-height: 475px;">
          <div class="currentStage text-center">
            <span style="display: inline-flex;width: 80%;">
              <h4 style="margin: 0 auto;" v-bind:class="{ boldText: stage0}">Шаг 1</h4>
              <h4 style="margin: 0 auto;" v-bind:class="{ boldText: stage1}">Шаг 2</h4>
              <h4 style="margin: 0 auto;" v-bind:class="{ boldText: stage2}">Шаг 3</h4>
            </span>
          </div>
          <div v-show='stage0' class="stage1">
            <h4>Выбор клуба и ученика</h4>
            <div class="form-group row"  style="height: 50px;">
              <label class="col-md-3 col-form-label-new text-md-right">Выбор ученика:</label>
              <div class="col-md-8">
                <select name="child" class="form-control-new">
                  <option value="">Иванов Иван</option>
                  <option value="">Петров Петр</option>
                </select>
              </div>
            </div>
            <div class="form-group row"  style="height: 50px;">
              <label class="col-md-3 col-form-label-new text-md-right">Выбор клуба:</label>
              <div class="col-md-8">
                <select name="club" class="form-control-new">
                  <option value="">Вершина</option>
                  <option value="">Волна</option>
                </select>
              </div>
            </div>
            <div class="firstSectionDescription stageUpButton">
              <button type="button" name="button" v-on:click="stageUP">Следующий шаг</button>
            </div>
          </div>
          <div v-show='stage1' class="stage2">
            <div class="row">
              <div class="col-md-4">
                <div id="date_range"></div>
              </div>
              <div class="col-md-5 selectedDaysBlock">
                <h5 class="selectedDays">Выбранные занятия:</h5>
              </div>
              <div class="col-md-2 text-center">
                <h5 class="amountOfPicked">Количество занятий:</h5>
              </div>
              <div class="col-4 text-left">
                <h5 class="freezes">Заморозки:</h5>
                <div class="freezesAvalible">не доступны</div>
              </div>
              <div class="col-md-6 text-right">
                <h5 class="Summ">Итоговая стоимость</h5>
              </div>
            </div>
            <!-- <textarea name="multipleDate"></textarea> -->
            <div class="mainHeaderButton stageDownButton">
              <button type="button" name="button" v-on:click="stageDown" style="width: 280px;height: 56px;border-radius: 8px;">Предыдующий шаг</button>
            </div>
            <div class="firstSectionDescription stageUpButton">
              <button type="button" name="button" v-on:click="stageUP">Следующий шаг</button>
            </div>
          </div>
          <div v-show='stage2' class="stage3">

          </div>

        </div>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
var main;
var checkboxValue = false;
var ClubPrivilege = false;
function calendar() {

  $('#date_range').datepicker({
    monthNames: ['Январь','Февраль','Март','Апрель','Май','Июнь',
        'Июль','Август','Сентябрь','Октябрь','Ноябрь','Декабрь'],
    monthNamesShort: ['Янв','Фев','Мар','Апр','Май','Июн',
        'Июл','Авг','Сен','Окт','Ноя','Дек'],
    dayNames: ['воскресенье','понедельник','вторник','среда','четверг','пятница','суббота'],
    dayNamesShort: ['вск','пнд','втр','срд','чтв','птн','сбт'],
    dayNamesMin: ['Вс','Пн','Вт','Ср','Чт','Пт','Сб'],
    dateFormat: 'dd.mm.yy',

    range: 'multiple',
    beforeShowDay: avalibleDays,
    onSelect: function(dateText, inst, extensionRange) {
      main = extensionRange
      console.log(extensionRange)
      mainFunction(extensionRange, checkboxValue)
    }
  });
  var extensionRange = $('#date_range').datepicker('widget').data('datepickerExtensionRange');
}

function parserDates(picked) {
  var result = ''
  var arrayOfPicked = String(picked).split(' ')
  if (arrayOfPicked[0] == 'Sun') {
    result = 'Воскресенье'
  }
  else if (arrayOfPicked[0] == 'Mon') {
    result = 'Понедельник'
  }
  else if (arrayOfPicked[0] == 'Tue') {
    result = 'Вторник'
  }
  else if (arrayOfPicked[0] == 'Wed') {
    result = 'Среда'
  }
  else if (arrayOfPicked[0] == 'Thu') {
    result = 'Четверг'
  }
  else if (arrayOfPicked[0] == 'Fri') {
    result = 'Пятница'
  }
  else if (arrayOfPicked[0] == 'Sat') {
    result = 'Суббота'
  }
  return result
}

function avalibleDays(date) {
  // массив дат доступных для регистрации занятия
  var avalible = [
  [8, 26], [8, 6], [8, 17],
  [8, 27], [8, 25], [8, 9],
  [8, 4], [8, 17], [8, 7],
  [8, 1], [8, 22], [8, 12]
  ]
  for (i = 0; i < avalible.length; i++) {
    if (date.getMonth() == avalible[i][0] - 1
        && date.getDate() == avalible[i][1]) {
      return [true, '_day'];
    }
  }
  return [false, ''];
}

function calculatedSumm(amount, privilege, freezes = false) {
  if (privilege == true) {
    if (amount<8) {
      return('Минимальное колличество треннировок 8');
    }
    else if (amount>7 & amount<12) {
      if (freezes) {
        return(amount*860  + ' Рублей');
      }
      else {
        return(amount*715  + ' Рублей');
      }
    }
    else if (amount>11 & amount<24) {
      if (freezes) {
        return(amount*780  + ' Рублей');
      }
      else {
        return(amount*650  + ' Рублей');
      }
    }
    else if (amount>23 & amount<36) {
      if (freezes) {
        return(amount*715  + ' Рублей');
      }
      else {
        return(amount*600  + ' Рублей');
      }
    }
    else if (amount>35) {
      return(amount*664  + ' Рублей');
    }
  }
  else {
    if (amount<8) {
      return('Минимальное колличество треннировок 8');
    }
    else if (amount>7 & amount<12) {
      if (freezes) {
        return(amount*715  + ' Рублей');
      }
      else {
        return(amount*600  + ' Рублей');
      }

    }
    else if (amount>11 & amount<24) {
      if (freezes) {
        return(amount*650  + ' Рублей');
      }
      else {
        return(amount*550  + ' Рублей');
      }

    }
    else if (amount>23 & amount<36) {
      if (freezes) {
        return(amount*585  + ' Рублей');
      }
      else {
        return(amount*500  + ' Рублей');
      }
    }
    else if (amount>35) {
      return(amount*553  + ' Рублей');
    }
  }
}

function checker(value) {
  checkboxValue = value;

  mainFunction(main, checkboxValue)
}


function mainFunction(extensionRange, checkbox) {

  $("div.datesPicked").remove()
  $("div.currentSumm").remove()
  $("div.currentSummPicked").remove()
  for (var i = 1; i < extensionRange.datesText.length; i++) {
      $('.selectedDays').parent().append($('<div>', {
        'text': parserDates(extensionRange.dates[i]) + ' ' + extensionRange.datesText[i]
      }).addClass('datesPicked'));
  }
  $('.Summ').parent().append($('<div>', {
    'text': calculatedSumm(extensionRange.datesText.length-1, ClubPrivilege, checkbox)
  }).addClass('currentSumm'));
  $('.amountOfPicked').parent().append($('<div>', {
    'text': extensionRange.datesText.length-1
  }).addClass('currentSummPicked'));
  if (extensionRange.datesText.length-1 > 7 & extensionRange.datesText.length-1 < 12) {
    $("div.freezesAvalible").remove()
    $('.freezes').parent().append($('<div>', {
      'text': 'Добавить 3 заморозки'
    }).addClass('freezesAvalible'));
    if (checkboxValue) {
      $('.freezesAvalible').append($('<input type="checkbox" onchange="checker(this.checked)" id="checkerBox" checked>' , {
        'type': 'checkbox'
      }).addClass('freezesCheck'));
    }
    else {
      $('.freezesAvalible').append($('<input type="checkbox" onchange="checker(this.checked)" id="checkerBox">' , {
        'type': 'checkbox'
      }).addClass('freezesCheck'));
    }
  }
  else if (extensionRange.datesText.length-1 >11 & extensionRange.datesText.length-1 < 24) {
    $("div.freezesAvalible").remove()
    $('.freezes').parent().append($('<div>', {
      'text': 'Добавить 6 заморозок'
    }).addClass('freezesAvalible'));
    if (checkboxValue) {
      $('.freezesAvalible').append($('<input type="checkbox" onchange="checker(this.checked)" id="checkerBox" checked>' , {
        'type': 'checkbox'
      }).addClass('freezesCheck'));
    }
    else {
      $('.freezesAvalible').append($('<input type="checkbox" onchange="checker(this.checked)" id="checkerBox">' , {
        'type': 'checkbox'
      }).addClass('freezesCheck'));
    }
  }
  else if (extensionRange.datesText.length-1 > 23 & extensionRange.datesText.length-1 < 36) {
    $("div.freezesAvalible").remove()
    $('.freezes').parent().append($('<div>', {
      'text': 'Добавить 12 заморозок'
    }).addClass('freezesAvalible'));
    if (checkboxValue) {
      $('.freezesAvalible').append($('<input type="checkbox" onchange="checker(this.checked)" id="checkerBox" checked>' , {
        'type': 'checkbox'
      }).addClass('freezesCheck'));
    }
    else {
      $('.freezesAvalible').append($('<input type="checkbox" onchange="checker(this.checked)" id="checkerBox">' , {
        'type': 'checkbox'
      }).addClass('freezesCheck'));
    }
  }
  else if (extensionRange.datesText.length-1 > 35) {
    $("div.freezesAvalible").remove()
    $('.freezes').parent().append($('<div>', {
      'text': '18 заморозок входят в стоимость'
    }).addClass('freezesAvalible'));

  }

  $('[name=multipleDate]').val(extensionRange.datesText.join('\n'));
}
$(document).ready(function(){
  calendar();
})
</script>

<script src="{{ asset('js/vue.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/welcomeVue.js') }}">    </script>

@endsection
