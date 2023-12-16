new Vue({
  el: '#lightbox',

  data: {
    firstText: false,
    secondText: false,
    thirdText: false,
    stage0: true,
    stage1: false,
    stage2: false,
    lightbox: false

  },
  methods: {
    stageUP: function () {
      if (this.stage1) {
        this.stage1 = false
        this.stage2 = true
      }
      if (this.stage0) {
        this.stage0 = false
        this.stage1 = true
      }
    },
    stageDown: function () {
      if (this.stage1) {
        this.stage1 = false
        this.stage0 = true
      }
      if (this.stage2) {
        this.stage2 = false
        this.stage1 = true
      }
    }
  }

})
new Vue({
  el: '#text',

  data: {
    firstText: false,
    secondText: false,
    thirdText: false

  }
})
