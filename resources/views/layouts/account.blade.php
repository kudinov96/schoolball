<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8" />
        <title> {{ $nameroute }} | Футбольная индустрия "Школа мяча"</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

        <link href="{{ asset('assets/plugins/jvectormap/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/plugins/dropify/css/dropify.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/plugins/custombox/custombox.min.css') }}" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{ asset('css/datepicker.min.css') }}">
        <link rel="stylesheet" href="{{ asset('tagsinput/jquery.tagsinput.css') }}">
        <link href="{{ asset('js/bootstrap-datetimepicker/bootstrap-datetimepicker.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/plugins/jsgrid/jsgrid.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/plugins/jsgrid/jsgrid-theme.min.css') }}" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/flipper.css') }}">
        <!-- App css -->
        <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/css/metismenu.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css" />

        <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
         <script type="text/javascript" src="{{ asset('js/jquery.dateandtime.js') }}"></script>
          <script type="text/javascript" src="{{ asset('js/ckeditor5-build-classic/ckeditor.js') }}"></script>

    </head>

    <body>

        <!-- Top Bar Start -->
        <div class="topbar">
             <!-- Navbar -->
             <nav class="navbar-custom">

                <!-- LOGO -->
                <div class="topbar-left text-center">
                    <a href="https://schoolball.ru/" class="logo">
                      <svg width="80px" height="56px" viewBox="0 0 80 56" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                              <defs>
                                                  <rect id="path-1" x="0" y="0" width="1216" height="72" rx="8"></rect>
                                                  <filter x="-3.0%" y="-51.4%" width="106.1%" height="202.8%" filterUnits="objectBoundingBox" id="filter-2">
                                                      <feMorphology radius="1" operator="dilate" in="SourceAlpha" result="shadowSpreadOuter1"></feMorphology>
                                                      <feOffset dx="0" dy="0" in="shadowSpreadOuter1" result="shadowOffsetOuter1"></feOffset>
                                                      <feGaussianBlur stdDeviation="12" in="shadowOffsetOuter1" result="shadowBlurOuter1"></feGaussianBlur>
                                                      <feComposite in="shadowBlurOuter1" in2="SourceAlpha" operator="out" result="shadowBlurOuter1"></feComposite>
                                                      <feColorMatrix values="0 0 0 0 0.323977461   0 0 0 0 0.381127872   0 0 0 0 0.466853487  0 0 0 0.15 0" type="matrix" in="shadowBlurOuter1"></feColorMatrix>
                                                  </filter>
                                              </defs>
                                              <g id="Symbols" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                  <g id="Menu" transform="translate(-32.000000, -56.000000)">
                                                      <g id="Group-76">
                                                          <g id="Group-45" transform="translate(0.000000, 48.000000)">
                                                              <g id="Rectangle" opacity="0.600000024">
                                                                  <use fill="black" fill-opacity="1" filter="url(#filter-2)" xlink:href="#path-1"></use>
                                                                  <rect stroke="#FFFFFF" stroke-width="1" fill="#FFFFFF" fill-rule="evenodd" x="-0.5" y="-0.5" width="1217" height="73" rx="8"></rect>
                                                              </g>
                                                              <g id="SchoolBall_Logo_Rus-3" transform="translate(32.000000, 8.000000)">
                                                                  <g id="SchoolBall_Logo_Rus-2">
                                                                      <g id="SchoolBall_Logo_Rus">
                                                                          <path d="M76.9129961,28.8800676 L3.06957198,28.8800676 C1.44607004,28.8800676 0.124980545,30.2190197 0.124980545,31.8651042 L0.124980545,44.6633915 C0.124980545,46.3086873 1.44607004,47.6477972 3.06957198,47.6477972 L76.9129961,47.6477972 C78.5368093,47.6477972 79.8578988,46.3086873 79.8578988,44.6633915 L79.8578988,31.8651042 C79.8578988,30.2190197 78.5368093,28.8800676 76.9129961,28.8800676" id="Fill-3" fill="#FFFFFE"></path>
                                                                          <path d="M39.991284,0.0900732394 C24.7950195,0.0900732394 12.4322179,12.6203493 12.4322179,28.0225577 C12.4322179,43.4238197 24.7950195,55.9540958 39.991284,55.9540958 C55.1875486,55.9540958 67.5506615,43.4238197 67.5506615,28.0225577 C67.5506615,12.6203493 55.1875486,0.0900732394 39.991284,0.0900732394" id="Fill-4" fill="#FFFFFE"></path>
                                                                          <path d="M25.4898054,13.8178028 C25.5634241,13.7376676 25.6406226,13.6594254 25.7184436,13.5807099 C28.6759533,10.5832113 32.4,8.62242254 36.4992996,7.89931268 L36.9148638,7.82580282 L36.6375097,8.14823662 C36.2084047,8.6484507 35.8720623,9.07468169 35.6381323,9.41494085 C35.5382101,9.56196056 35.4014008,9.76292958 35.3047471,9.97983099 L35.2729961,10.0516056 L35.1971984,10.0662761 C35.15393,10.0752676 30.8289494,10.9584901 26.9277821,14.281262 L26.8731518,14.3274817 L25.3067704,14.0173521 L25.4898054,13.8178028 Z M40.8779767,13.9766535 L40.9582879,14.0340732 L39.52607,20.9575662 L39.4552529,20.9891155 C35.5094163,22.7276394 33.0269261,24.3243493 32.1427237,24.9300958 L32.065214,24.9835718 L26.5909728,21.7887324 L26.5985992,21.6928225 C26.6641245,20.8805859 27.0138521,16.7534648 27.5021012,15.245093 L27.5150195,15.2053408 L27.5466148,15.1780507 C31.174786,11.9851042 35.6610117,11.1113465 35.7056809,11.1025127 L35.8387549,11.0952563 L35.8983658,11.1201803 C36.4037354,11.3626366 38.9827237,12.6198761 40.8779767,13.9766535 Z M42.0936965,14.1526986 C43.498677,13.629138 47.1842802,13.2753127 49.1402335,13.1486423 L49.1878599,13.1454873 L49.2284825,13.1710423 C52.8908949,15.4660958 54.8018677,18.817893 54.820856,18.8511775 L54.8470039,18.8980282 L54.8387549,18.9500845 C54.6731518,19.9968901 54.0747082,23.5651155 53.3077043,25.5514592 L53.2792218,25.6254423 L46.5797665,27.2590648 L40.5696498,21.168 L42.0158755,14.1809352 L42.0936965,14.1526986 Z M49.1047471,9.79021972 C51.0017121,10.7616225 52.7322957,12.0324282 54.2485603,13.5693521 C55.7802335,15.1211042 57.0459144,16.8962254 58.010428,18.8451831 L58.1794553,19.1867042 L55.7273152,18.2798197 L55.7000778,18.2336 C55.6790661,18.1979493 53.5637354,14.6451831 49.8311284,12.2783549 L49.789572,12.2523268 L48.7523735,9.60991549 L49.1047471,9.79021972 Z M20.5070817,33.2906592 C19.8263035,30.6968338 19.6544747,27.9804394 20.0152529,25.2739831 L20.0761089,24.821093 L21.0810895,26.6597859 L21.0761089,26.7078986 C20.825214,29.0188845 21.0954086,31.4554366 21.4205447,33.2906592 L22.5055253,33.2906592 C22.1715175,31.4715268 21.8835798,29.0272451 22.140856,26.7556958 L22.1598444,26.6970141 C22.8719066,25.455707 24.5634241,23.0145803 25.8692607,22.6612282 L25.9290272,22.6452958 L31.6233463,25.9668056 L33.1310506,33.2906592 L44.0555642,33.2906592 L46.7670039,28.3218028 L53.4561868,26.6924394 L53.5153307,26.7717859 C54.56,28.1758873 56.3905058,30.8705127 56.6205447,32.064969 L56.627393,32.099831 L56.6245914,32.1105577 C56.6227237,32.2326535 56.6040467,32.6416901 56.4490272,33.2906592 L57.5431907,33.2906592 C57.6038911,33.0007211 57.6396887,32.7588958 57.6602335,32.5711775 L57.6706615,32.4744789 L57.7612451,32.4435606 C58.2239689,32.2872338 58.9228016,31.9446085 59.6270817,31.2030423 L59.9596887,30.8533183 L59.8824903,31.3322366 C59.7758755,31.9955606 59.6347082,32.6481577 59.4672374,33.2906592 L60.5662257,33.2906592 C60.9433463,31.7643042 61.1626459,30.1882592 61.2032685,28.5819268 C61.2062257,28.5066817 61.2079377,28.4320676 61.2079377,28.3561915 C61.2521401,25.4850479 60.7453696,22.6855211 59.700856,20.0330141 L59.629572,19.8505014 C58.5657588,17.2115606 57.0084047,14.841893 55.0009339,12.8071211 C52.9953307,10.7747155 50.6578988,9.19677746 48.0521401,8.11747606 L47.9038132,8.05579718 C45.3845914,7.03454648 42.7256031,6.51587606 40.0015564,6.51587606 C39.4555642,6.51587606 38.9031907,6.53780282 38.3592218,6.58055211 L38.3511284,6.5811831 C38.3494163,6.5811831 38.3478599,6.5811831 38.3461479,6.5811831 L38.3142412,6.58402254 L38.3101946,6.58228732 C38.2518288,6.58528451 38.1943969,6.59049014 38.1397665,6.59711549 C33.1702724,7.03454648 28.4975875,9.23936901 24.9772763,12.8071211 C24.6073152,13.181769 24.2476265,13.5740845 23.9086381,13.9717634 C23.8775097,14.0086761 23.8627237,14.0257127 23.8488716,14.043538 C21.6714397,16.6212732 20.1157977,19.7254085 19.3450584,23.0257803 C19.3270039,23.095031 19.311751,23.1608113 19.2964981,23.2284845 L19.2930739,23.2504113 C18.5508171,26.5791775 18.6163424,30.0294085 19.4225681,33.2906592 L20.5070817,33.2906592 L20.5070817,33.2906592 Z" id="Fill-5" fill="#1A1919"></path>
                                                                          <path d="M39.991284,1.15233803 C25.3729183,1.15233803 13.4801556,13.206062 13.4801556,28.0225577 C13.4801556,42.8382648 25.3729183,54.8921465 39.991284,54.8921465 C54.6096498,54.8921465 66.5025681,42.8382648 66.5025681,28.0225577 C66.5025681,13.206062 54.6096498,1.15233803 39.991284,1.15233803 Z M39.991284,2.21444507 C54.0541634,2.21444507 65.4546304,13.7684282 65.4546304,28.0225577 C65.4546304,42.2751099 54.0541634,53.8297239 39.991284,53.8297239 C25.9284047,53.8297239 14.528249,42.2751099 14.528249,28.0225577 C14.528249,13.7684282 25.9284047,2.21444507 39.991284,2.21444507 L39.991284,2.21444507 Z" id="Fill-6" fill="#1A1919"></path>
                                                                          <path d="M3.06957198,46.0544 C2.31268482,46.0544 1.69696498,45.4301972 1.69696498,44.6633915 L1.69696498,31.8651042 C1.69696498,31.0975099 2.31268482,30.4734648 3.06957198,30.4734648 L76.9129961,30.4734648 C77.6700389,30.4734648 78.2859144,31.0975099 78.2859144,31.8651042 L78.2859144,44.6633915 C78.2859144,45.4301972 77.6700389,46.0544 76.9129961,46.0544 L3.06957198,46.0544" id="Fill-7" fill="#F0A936"></path>
                                                                          <path d="M76.9129961,29.9423324 L3.06957198,29.9423324 C2.02381323,29.9423324 1.17291829,30.8047324 1.17291829,31.8651042 L1.17291829,44.6633915 C1.17291829,45.7231324 2.02381323,46.5855324 3.06957198,46.5855324 L76.9129961,46.5855324 C77.9590661,46.5855324 78.8099611,45.7231324 78.8099611,44.6633915 L78.8099611,31.8651042 C78.8099611,30.8047324 77.9590661,29.9423324 76.9129961,29.9423324 Z M76.9129961,31.0044394 C77.3800778,31.0044394 77.7618677,31.3915493 77.7618677,31.8651042 L77.7618677,44.6633915 C77.7618677,45.1363155 77.3800778,45.5234254 76.9129961,45.5234254 L3.06957198,45.5234254 C2.60280156,45.5234254 2.22101167,45.1363155 2.22101167,44.6633915 L2.22101167,31.8651042 C2.22101167,31.3915493 2.60280156,31.0044394 3.06957198,31.0044394 L76.9129961,31.0044394 L76.9129961,31.0044394 Z" id="Fill-8" fill="#1A1919"></path>
                                                                          <polyline id="Fill-9" fill="#1A1919" points="6.14303502 41.5573634 6.14303502 34.9709746 7.86038911 34.9709746 7.86038911 40.005138 9.53182879 40.005138 9.53182879 34.9709746 11.248716 34.9709746 11.248716 40.005138 12.9203113 40.005138 12.9203113 34.9709746 14.637821 34.9709746 14.637821 41.5573634 6.14303502 41.5573634"></polyline>
                                                                          <polyline id="Fill-10" fill="#1A1919" points="15.8607004 41.5573634 15.8607004 34.9709746 17.5780545 34.9709746 17.5780545 37.464631 18.3953307 37.464631 19.8711284 34.9709746 21.7743191 34.9709746 19.7321401 38.1787493 21.867393 41.5573634 19.9642023 41.5573634 18.3856809 39.0170141 17.5780545 39.0170141 17.5780545 41.5573634 15.8607004 41.5573634"></polyline>
                                                                          <path d="M25.2449805,36.4291831 C24.1218677,36.4291831 23.5277821,37.2103437 23.5277821,38.2640901 C23.5277821,39.3175211 24.1218677,40.0986817 25.2449805,40.0986817 C26.368249,40.0986817 26.9623346,39.3175211 26.9623346,38.2640901 C26.9623346,37.2103437 26.368249,36.4291831 25.2449805,36.4291831 Z M25.2449805,34.8293183 C27.5662257,34.8293183 28.72607,36.4291831 28.72607,38.2640901 C28.72607,40.0986817 27.5662257,41.6985465 25.2449805,41.6985465 C22.9242023,41.6985465 21.7638911,40.0986817 21.7638911,38.2640901 C21.7638911,36.4291831 22.9242023,34.8293183 25.2449805,34.8293183 L25.2449805,34.8293183 Z" id="Fill-11" fill="#1A1919"></path>
                                                                          <path d="M35.2700389,34.9709746 L35.2700389,41.5573634 L33.5520623,41.5573634 L33.5520623,36.5233577 L32.1505058,36.5233577 C31.9461479,39.2238197 31.621323,41.6327662 29.7554864,41.6420732 C29.51393,41.6420732 29.2445136,41.6042141 28.9565759,41.5105127 L28.9565759,39.9955155 C29.0776654,40.0329014 29.2261479,40.051831 29.402179,40.0329014 C30.4513619,39.9202704 30.4329961,36.9655211 30.5814786,34.9709746 L35.2700389,34.9709746" id="Fill-12" fill="#1A1919"></path>
                                                                          <path d="M38.5357198,39.1107155 L40.2066926,39.1107155 L39.538677,37.2103437 C39.4828016,37.050231 39.4269261,36.8901183 39.3716732,36.5422873 C39.3154864,36.8901183 39.2596109,37.050231 39.204358,37.2103437 L38.5357198,39.1107155 Z M35.8896498,41.5573634 L38.4429572,34.9709746 L40.2997665,34.9709746 L42.8530739,41.5573634 L41.0893385,41.5573634 L40.7175097,40.5219155 L38.025214,40.5219155 L37.6540078,41.5573634 L35.8896498,41.5573634 L35.8896498,41.5573634 Z" id="Fill-13" fill="#1A1919"></path>
                                                                          <polyline id="Fill-14" fill="#1A1919" points="53.2258366 34.9709746 53.2258366 41.5573634 51.5083268 41.5573634 51.5083268 38.0568113 50.1159533 40.2207775 49.1319844 40.2207775 47.7392996 38.0471887 47.7392996 41.5573634 46.0214786 41.5573634 46.0214786 34.9709746 47.6462257 34.9709746 49.6238132 38.0568113 51.6014008 34.9709746 53.2258366 34.9709746"></polyline>
                                                                          <path d="M57.0113619,38.0004958 L58.0141634,38.0004958 L58.0141634,36.4758761 L57.0113619,36.4758761 C56.4264591,36.4758761 56.092607,36.7303211 56.092607,37.238107 C56.092607,37.7466817 56.4264591,38.0004958 57.0113619,38.0004958 Z M53.9203113,41.5573634 L55.6740856,39.1764958 C54.894786,38.8848225 54.3288716,38.2737127 54.3288716,37.238107 C54.3288716,35.5915493 55.5819455,34.9709746 56.9926848,34.9709746 L59.7321401,34.9709746 L59.7321401,41.5573634 L58.0141634,41.5573634 L58.0141634,39.4116958 L57.4107393,39.4116958 L55.8787549,41.5573634 L53.9203113,41.5573634 L53.9203113,41.5573634 Z" id="Fill-15" fill="#1A1919"></path>
                                                                          <path d="M64.5388327,41.5573634 L64.5388327,39.3175211 C64.0096498,39.478107 63.4994553,39.5623437 63.0351751,39.5623437 C61.6238132,39.5623437 60.6675486,38.828507 60.6675486,37.2849577 L60.6675486,34.9709746 L62.3849027,34.9709746 L62.3849027,37.1914141 C62.3849027,37.7277521 62.8585214,37.991031 63.4715953,37.991031 C63.8054475,37.991031 64.1774319,37.9162592 64.5388327,37.765769 L64.5388327,34.9709746 L66.256965,34.9709746 L66.256965,41.5573634 L64.5388327,41.5573634" id="Fill-16" fill="#1A1919"></path>
                                                                          <path d="M69.5232685,39.1107155 L71.1940856,39.1107155 L70.5256031,37.2103437 C70.4701946,37.050231 70.4138521,36.8901183 70.3584436,36.5422873 C70.3021012,36.8901183 70.2466926,37.050231 70.1911284,37.2103437 L69.5232685,39.1107155 Z M66.8770428,41.5573634 L69.4297276,34.9709746 L71.286537,34.9709746 L73.8398444,41.5573634 L72.0759533,41.5573634 L71.7045914,40.5219155 L69.0119844,40.5219155 L68.6414008,41.5573634 L66.8770428,41.5573634 L66.8770428,41.5573634 Z" id="Fill-17" fill="#1A1919"></path>
                                                                          <polyline id="Fill-18" fill="#1A1919" points="39.7543969 3.96353803 39.7094163 4.05077183 39.6155642 4.06733521 39.0719066 4.15030986 39.4681712 4.54735775 39.5336965 4.61376901 39.5171984 4.70936338 39.4272374 5.26873239 39.9056809 5.00734648 39.9915953 4.96238873 40.0771984 5.00734648 40.555642 5.26873239 40.4655253 4.70936338 40.4494942 4.61376901 40.5147082 4.54735775 40.9111284 4.15030986 40.3673152 4.06733521 40.273463 4.05077183 40.2284825 3.96353803 39.9915953 3.46206197 39.7543969 3.96353803"></polyline>
                                                                          <polyline id="Fill-19" fill="#1A1919" points="28.8933852 6.75328451 28.8929183 6.8520338 28.8168093 6.91008451 28.3718288 7.23661972 28.9033463 7.4055662 28.9915953 7.43396056 29.0203891 7.52655775 29.193463 8.06526197 29.5005447 7.61063662 29.5559533 7.53065915 29.6530739 7.53113239 30.1964202 7.54075493 29.863035 7.08549859 29.8057588 7.00851831 29.8333074 6.91891831 30.0057588 6.38131831 29.4852918 6.56036056 29.3945525 6.58938592 29.3151751 6.53307042 28.8776654 6.19754366 28.8933852 6.75328451"></polyline>
                                                                          <polyline id="Fill-20" fill="#1A1919" points="20.5050584 14.281262 20.5492607 14.368969 20.5080156 14.4562028 20.2597665 14.9534197 20.8088716 14.8562479 20.9000778 14.8407887 20.9676265 14.9092507 21.3651362 15.3078761 21.4323735 14.7612845 21.4457588 14.6641127 21.5316732 14.6197859 22.0188327 14.3754366 21.5168872 14.1258817 21.4308171 14.0837634 21.4150973 13.9913239 21.3252918 13.4335324 20.9433463 13.8348394 20.8761089 13.9031437 20.7796109 13.8894197 20.2392218 13.7950873 20.5050584 14.281262"></polyline>
                                                                          <polyline id="Fill-21" fill="#1A1919" points="16.4572763 24.8703099 16.5361868 24.9277296 16.5388327 25.0237972 16.5431907 25.5815887 16.9870817 25.2395944 17.061323 25.1834366 17.1523735 25.2129352 17.6859144 25.3823549 17.4985214 24.8655775 17.4663035 24.773138 17.5224903 24.6936338 17.8449805 24.2500507 17.2859144 24.2615662 17.1906615 24.2645634 17.134786 24.1899493 16.8026459 23.7357972 16.6446693 24.2699268 16.6157198 24.3615775 16.5238911 24.3943887 16.0007782 24.5614423 16.4572763 24.8703099"></polyline>
                                                                          <polyline id="Fill-22" fill="#1A1919" points="51.1055253 6.19754366 50.6680156 6.53307042 50.5884825 6.58938592 50.4978988 6.56036056 49.9768093 6.38131831 50.1492607 6.91891831 50.1774319 7.00851831 50.12 7.08549859 49.7867704 7.54075493 50.3299611 7.53113239 50.4264591 7.53065915 50.4828016 7.61063662 50.7897276 8.06526197 50.9623346 7.52655775 50.9914397 7.43396056 51.0792218 7.4055662 51.6113619 7.23661972 51.1657588 6.91008451 51.0896498 6.8520338 51.0891829 6.75328451 51.1055253 6.19754366"></polyline>
                                                                          <polyline id="Fill-23" fill="#1A1919" points="59.7436576 13.7950873 59.2032685 13.8894197 59.1067704 13.9031437 59.0393774 13.8348394 58.6575875 13.4335324 58.5677821 13.9913239 58.5519066 14.0837634 58.4661479 14.1258817 57.9640467 14.3754366 58.4512062 14.6197859 58.5371206 14.6641127 58.5506615 14.7612845 58.6177432 15.3078761 59.0152529 14.9092507 59.0826459 14.8407887 59.1738521 14.8562479 59.7231128 14.9534197 59.4748638 14.4562028 59.4336187 14.368969 59.477821 14.281262 59.7436576 13.7950873"></polyline>
                                                                          <polyline id="Fill-24" fill="#1A1919" points="63.9821012 24.5614423 63.4589883 24.3943887 63.3671595 24.3615775 63.3380545 24.2699268 63.1803891 23.7357972 62.8480934 24.1899493 62.7922179 24.2645634 62.696965 24.2615662 62.1377432 24.2500507 62.4603891 24.6936338 62.5165759 24.773138 62.484358 24.8655775 62.296965 25.3823549 62.8306615 25.2129352 62.9215564 25.1834366 62.9957977 25.2395944 63.4396887 25.5815887 63.4440467 25.0237972 63.4466926 24.9277296 63.5256031 24.8703099 63.9821012 24.5614423"></polyline>
                                                                          <path d="M33.7590661,50.1988732 C34.1280934,49.8556169 34.3410117,49.5669408 34.3410117,49.1086873 C34.3410117,48.4792789 33.8994553,48.0886986 33.1877043,48.0886986 C32.8578988,48.0886986 32.5262257,48.1656789 32.2789105,48.2991324 L32.2099611,48.3363606 L32.4456031,48.9552 L32.5344747,48.9037746 C32.6941634,48.8111775 32.913463,48.754231 33.1067704,48.754231 C33.3316732,48.754231 33.5993774,48.8141746 33.5993774,49.1004845 C33.5993774,49.3304789 33.5064591,49.4987944 33.2319066,49.7666479 C32.8871595,50.0998085 32.5856809,50.3515718 32.3101946,50.5378704 L32.2708171,50.5645296 L32.2708171,51.0623775 L34.3878599,51.0623775 L34.3878599,50.4050479 L33.5123735,50.4050479 C33.5929961,50.3444732 33.6754864,50.2771155 33.7590661,50.1988732" id="Fill-25" fill="#1A1919"></path>
                                                                          <path d="M37.6916732,50.444169 C37.2287938,50.444169 36.892607,50.0890817 36.892607,49.5995944 C36.892607,49.1099493 37.2287938,48.754231 37.6916732,48.754231 C38.1547082,48.754231 38.4902724,49.1099493 38.4902724,49.5995944 C38.4902724,50.0890817 38.1547082,50.444169 37.6916732,50.444169 Z M37.6916732,48.0886986 C36.8136965,48.0886986 36.1511284,48.7382986 36.1511284,49.5995944 C36.1511284,50.4602592 36.8136965,51.1098592 37.6916732,51.1098592 C38.5699611,51.1098592 39.2323735,50.4602592 39.2323735,49.5995944 C39.2323735,48.7382986 38.5699611,48.0886986 37.6916732,48.0886986 L37.6916732,48.0886986 Z" id="Fill-26" fill="#1A1919"></path>
                                                                          <path d="M42.4210117,50.444169 C41.9582879,50.444169 41.6224125,50.0890817 41.6224125,49.5995944 C41.6224125,49.1099493 41.9582879,48.754231 42.4210117,48.754231 C42.8837354,48.754231 43.2199222,49.1099493 43.2199222,49.5995944 C43.2199222,50.0890817 42.8837354,50.444169 42.4210117,50.444169 Z M42.4210117,48.0886986 C41.5424125,48.0886986 40.8804669,48.7382986 40.8804669,49.5995944 C40.8804669,50.4602592 41.5424125,51.1098592 42.4210117,51.1098592 C43.298677,51.1098592 43.9612451,50.4602592 43.9612451,49.5995944 C43.9612451,48.7382986 43.298677,48.0886986 42.4210117,48.0886986 L42.4210117,48.0886986 Z" id="Fill-27" fill="#1A1919"></path>
                                                                          <polyline id="Fill-28" fill="#1A1919" points="45.6678599 48.1360225 45.6678599 48.7933521 46.9361868 48.7933521 45.9906615 51.0623775 46.7833463 51.0623775 47.76607 48.620462 47.772607 48.1360225 45.6678599 48.1360225"></polyline>
                                                                          <path d="M74.8412451,32.6517859 C74.1543969,32.6517859 73.4592996,33.1103549 73.4592996,33.9869521 C73.4592996,34.863707 74.1543969,35.3222761 74.8412451,35.3222761 C75.5262257,35.3222761 76.2194553,34.863707 76.2194553,33.9869521 C76.2194553,33.1103549 75.5262257,32.6517859 74.8412451,32.6517859 Z M74.8412451,35.637769 C73.9998444,35.637769 73.1480156,35.0706704 73.1480156,33.9869521 C73.1480156,32.9033915 73.9998444,32.336293 74.8412451,32.336293 C75.6807782,32.336293 76.5307393,32.9033915 76.5307393,33.9869521 C76.5307393,35.0706704 75.6807782,35.637769 74.8412451,35.637769 L74.8412451,35.637769 Z" id="Fill-29" fill="#1A1919"></path>
                                                                          <path d="M74.9263813,33.925431 L74.5985992,33.925431 L74.5985992,33.5357972 L74.9263813,33.5357972 C75.0396887,33.5357972 75.193463,33.556462 75.193463,33.7326648 C75.193463,33.9050817 75.0396887,33.925431 74.9263813,33.925431 Z M75.2703502,34.2043268 C75.4566537,34.1470648 75.6063813,33.9869521 75.6063813,33.7162592 C75.6063813,33.3143211 75.2703502,33.1666704 74.9749416,33.1666704 L74.2101167,33.1666704 L74.2101167,34.7704789 L74.5985992,34.7704789 L74.5985992,34.2454986 L74.8333074,34.2454986 C74.8454475,34.2454986 74.8575875,34.2454986 74.8697276,34.2454986 L75.2582101,34.7704789 L75.6992996,34.7704789 L75.2703502,34.2043268 L75.2703502,34.2043268 Z" id="Fill-30" fill="#1A1919"></path>
                                                                      </g>
                                                                  </g>
                                                              </g>
                                                          </g>
                                                      </g>
                                                  </g>
                                              </g>
                      </svg>
                    </a>
                </div>

                <ul class="list-unstyled topbar-nav float-right mb-0">

                    <li class="dropdown">
                        <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
                            aria-haspopup="false" aria-expanded="false">
                            <img src="@if (Auth::user()->photo == "") {{ asset('assets/no_photo.jpg') }} @else {{ asset('/storage/') }}/{{ str_replace("public/", "", Auth::user()->photo) }} @endif" alt="profile-user" class="rounded-circle" />
                            <span class="ml-1 nav-user-name hidden-sm"> <i class="mdi mdi-chevron-down"></i> </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href=""><i class="dripicons-user text-muted mr-2"></i> Профиль</a>
                            <a class="dropdown-item" href="{{ route('Edit') }}"><i class="dripicons-gear text-muted mr-2"></i> Настройки профиля</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="dripicons-exit text-muted mr-2"></i> Выход</a>
                        </div>
                    </li>
                </ul>

                <ul class="list-unstyled topbar-nav mb-0">

                    <li>
                        <button class="button-menu-mobile nav-link waves-effect waves-light">
                            <i class="mdi mdi-menu nav-icon"></i>
                        </button>
                    </li>

                    <li class="hide-phone app-search">
                        <!-- <form role="search" class="">
                            <input type="text" placeholder="Поиск..." class="form-control">
                            <a href=""><i class="fas fa-search"></i></a>
                        </form> -->
                    </li>

                </ul>

            </nav>
            <!-- end navbar-->
        </div>
        <!-- Top Bar End -->
        <div class="page-wrapper-img">
            <div class="page-wrapper-img-inner">
                <div class="sidebar-user media">
                    <img src="@if (Auth::user()->photo == "") {{ asset('assets/no_photo.jpg') }} @else {{ asset('/storage/') }}/{{ str_replace("public/", "", Auth::user()->photo) }} @endif" alt="user" class="rounded-circle img-thumbnail mb-1">
                    <span class="online-icon"><i class="mdi mdi-record text-success"></i></span>
                    <div class="media-body">
                        <h5 class="text-light">{{ Auth::user()->name }} {{ Auth::user()->surname }} </h5>
                        <ul class="list-unstyled list-inline mb-0 mt-2">
                            <li class="list-inline-item">
                                <a href="{{ route('home') }}" class=""><i class="mdi mdi-home text-light"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="{{ route('Edit') }}" class=""><i class="mdi mdi-settings text-light"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="mdi mdi-power text-danger"></i></a>
                            </li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </ul>
                    </div>
                </div>
                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            @if (Route::currentRouteName() == "coachList")
                              <div class="float-right align-item-center mt-2">
                                   <button class="btn btn-dark waves-effect waves-light" onclick="document.location.href = '/coachNew';">Создать нового тренера</button>

                              </div>
                            @endif
                            @if (Route::currentRouteName() == "coachEdit")
                              <div class="float-right align-item-center mt-2">
                                <div class="button-items">
                                  <button type="button" class="btn btn-dark waves-effect waves-light" onclick="event.preventDefault(); document.getElementById('sendform').submit();">Сохранить и выйти</button>
                                  <button type="button" class="btn btn-danger waves-effect waves-light" data-toggle="modal" data-animation="bounce" data-target=".bs-example-modal-center">Удалить</button>
                                </div>
                              </div>
                            @endif

                                @if (Route::currentRouteName() == "coachNew")
                                    <div class="float-right align-item-center mt-2">
                                        <button class="btn btn-dark waves-effect waves-light" onclick="event.preventDefault(); document.getElementById('sendform').submit();">Сохранить и выйти</button>
                                    </div>
                                @endif

                            @if (Route::currentRouteName() == "areaList")
                              <div class="float-right align-item-center mt-2">
                                  <button class="btn btn-dark waves-effect waves-light" onclick="document.location.href = '/areaNew';">Создать новую площадку</button>
                              </div>
                            @endif

                            @if (Route::currentRouteName() == "Edit")
                              <div class="float-right align-item-center mt-2">
                                  <button class="btn btn-dark waves-effect waves-light" onclick="event.preventDefault(); document.getElementById('sendform').submit();">Сохранить и выйти</button>
                              </div>
                            @endif
                            @if (Route::currentRouteName() == "areaEdit")
                              <div class="float-right align-item-center mt-2">
                                <div class="button-items">
                                  <button type="button" class="btn btn-dark waves-effect waves-light" onclick="event.preventDefault(); document.getElementById('sendform').submit();">Сохранить и выйти</button>
                                  <button type="button" class="btn btn-danger waves-effect waves-light" data-toggle="modal" data-animation="bounce" data-target=".bs-example-modal-center">Удалить</button>
                                </div>
                              </div>
                            @endif
                            @if (Route::currentRouteName() == "clubEdit")
                              <div class="float-right align-item-center mt-2">
                                <div class="button-items">
                                  <button type="button" class="btn btn-dark waves-effect waves-light" onclick="event.preventDefault(); document.getElementById('sendform').submit();">Сохранить и выйти</button>
                                  <button type="button" class="btn btn-danger waves-effect waves-light" data-toggle="modal" data-animation="bounce" data-target=".bs-example-modal-center">Удалить</button>
                                </div>
                              </div>
                            @endif
                            @if (Route::currentRouteName() == "clubNew")
                              <div class="float-right align-item-center mt-2">
                                  <button class="btn btn-dark waves-effect waves-light" onclick="event.preventDefault(); document.getElementById('sendform').submit();">Сохранить и выйти</button>
                              </div>
                            @endif
                            @if (Route::currentRouteName() == "clubList")
                              <div class="float-right align-item-center mt-2">
                                  <button class="btn btn-dark waves-effect waves-light" onclick="document.location.href = '/clubNew';">Создать новый клуб</button>
                              </div>
                            @endif
                            @if (Route::currentRouteName() == "areaNew")
                              <div class="float-right align-item-center mt-2">
                                  <button class="btn btn-dark waves-effect waves-light" onclick="event.preventDefault(); document.getElementById('sendform').submit();">Сохранить и выйти</button>
                              </div>
                            @endif
                            @if (Route::currentRouteName() == "newsEdit")
                              <div class="float-right align-item-center mt-2">
                                <div class="button-items">
                                  <button type="button" class="btn btn-dark waves-effect waves-light" onclick="event.preventDefault(); document.getElementById('sendform').submit();">Сохранить и выйти</button>
                                  <button type="button" class="btn btn-danger waves-effect waves-light" data-toggle="modal" data-animation="bounce" data-target=".bs-example-modal-center">Удалить</button>
                                </div>
                              </div>
                            @endif
                            @if (Route::currentRouteName() == "newsNew")
                              <div class="float-right align-item-center mt-2">
                                  <button class="btn btn-dark waves-effect waves-light" onclick="event.preventDefault(); document.getElementById('sendform').submit();">Сохранить и выйти</button>
                              </div>
                            @endif

                                @if (Route::currentRouteName() == "blogEdit")
                                    <div class="float-right align-item-center mt-2">
                                        <div class="button-items">
                                            <button type="button" class="btn btn-dark waves-effect waves-light" onclick="event.preventDefault(); document.getElementById('sendform').submit();">Сохранить и выйти</button>
                                            <button type="button" class="btn btn-danger waves-effect waves-light" data-toggle="modal" data-animation="bounce" data-target=".bs-example-modal-center">Удалить</button>
                                        </div>
                                    </div>
                                @endif

                                @if (Route::currentRouteName() == "blogNew")
                                    <div class="float-right align-item-center mt-2">
                                        <button class="btn btn-dark waves-effect waves-light" onclick="event.preventDefault(); document.getElementById('sendform').submit();">Сохранить и выйти</button>
                                    </div>
                                @endif

                            @if (Route::currentRouteName() == "newsList")
                              <div class="float-right align-item-center mt-2">
                                  <button class="btn btn-dark waves-effect waves-light" onclick="document.location.href = '/newsNew';">Создать новость</button>
                              </div>
                            @endif
                                @if (Route::currentRouteName() == "blogList")
                                    <div class="float-right align-item-center mt-2">
                                        <button class="btn btn-dark waves-effect waves-light" onclick="document.location.href = '/blogNew';">Создать запись</button>
                                    </div>
                                @endif
                            @if (Route::currentRouteName() == "upstudentEdit")
                              <div class="float-right align-item-center mt-2">
                                <div class="button-items">
                                  <button type="button" class="btn btn-dark waves-effect waves-light" onclick="event.preventDefault(); document.getElementById('sendform').submit();">Сохранить и выйти</button>
                                  <button type="button" class="btn btn-danger waves-effect waves-light" data-toggle="modal" data-animation="bounce" data-target=".bs-example-modal-center">Удалить</button>
                                </div>
                              </div>
                            @endif
                            @if (Route::currentRouteName() == "upstudentNew")
                              <div class="float-right align-item-center mt-2">
                                  <button class="btn btn-dark waves-effect waves-light" onclick="event.preventDefault(); document.getElementById('sendform').submit();">Сохранить и выйти</button>
                              </div>
                            @endif
                            @if (Route::currentRouteName() == "upstudentList")
                              <div class="float-right align-item-center mt-2">
                                  <button class="btn btn-dark waves-effect waves-light" onclick="document.location.href = '/upstudentNew';">Создать новую запись</button>
                              </div>
                            @endif
                            @if ((Route::currentRouteName() == "clients") || (Route::currentRouteName() == "clients_camp"))
                              <div class="float-right align-item-center mt-2">
                                <button class="btn btn-dark waves-effect waves-light" data-toggle="modal" data-animation="bounce" data-target=".bs-example-modal-lg">Создать новую запись клиента</button>
                              </div>
                            @endif


                                @if (Route::currentRouteName() == "reviewsEdit")
                                    <div class="float-right align-item-center mt-2">
                                        <div class="button-items">
                                            <button type="button" class="btn btn-dark waves-effect waves-light" onclick="event.preventDefault(); document.getElementById('sendform').submit();">Сохранить и выйти</button>
                                            <button type="button" class="btn btn-danger waves-effect waves-light" data-toggle="modal" data-animation="bounce" data-target=".bs-example-modal-center">Удалить</button>
                                        </div>
                                    </div>
                                @endif

                                @if (Route::currentRouteName() == "reviewsVideoEdit")
                                    <div class="float-right align-item-center mt-2">
                                        <div class="button-items">
                                            <button type="button" class="btn btn-dark waves-effect waves-light" onclick="event.preventDefault(); document.getElementById('sendform').submit();">Сохранить и выйти</button>
                                            <button type="button" class="btn btn-danger waves-effect waves-light" data-toggle="modal" data-animation="bounce" data-target=".bs-example-modal-center">Удалить</button>
                                        </div>
                                    </div>
                                @endif


                            @if (Route::currentRouteName() == "reviewsNew")
                                    <div class="float-right align-item-center mt-2">
                                        <button class="btn btn-dark waves-effect waves-light" onclick="event.preventDefault(); document.getElementById('sendform').submit();">Сохранить и выйти</button>
                                    </div>
                                @endif
                                @if (Route::currentRouteName() == "reviewsVideoNew")
                                    <div class="float-right align-item-center mt-2">
                                        <button class="btn btn-dark waves-effect waves-light" onclick="event.preventDefault(); document.getElementById('sendform').submit();">Сохранить и выйти</button>
                                    </div>
                                @endif
                                @if (Route::currentRouteName() == "reviewsList")
                                    <div class="float-right align-item-center mt-2">
                                        <button class="btn btn-dark waves-effect waves-light" onclick="document.location.href = '/reviewsNew';">Создать новый отзыв</button>
                                    </div>
                                @endif

                                @if (Route::currentRouteName() == "reviewsVideoList")
                                    <div class="float-right align-item-center mt-2">
                                        <button class="btn btn-dark waves-effect waves-light" onclick="document.location.href = '/reviewsVideoNew';">Создать новый отзыв</button>
                                    </div>
                                @endif
                            <h1> {{ $nameroute }} </h1>
                            <!-- <div class="">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Личный кабинет</a></li>
                                </ol>
                            </div> -->
                        </div>
                    </div>
                </div>
                <!-- end page title end breadcrumb -->
            </div>
        </div>

        <div class="page-wrapper">
            <div class="page-wrapper-inner">

                <!-- Left Sidenav -->
                <div class="left-sidenav">
                  @yield ('content-menu', View::make('content-menu'))
                </div>
                <!-- end left-sidenav-->

                <!-- Page Content-->
                <div class="page-content">
                    <div class="container-fluid">
                              @yield ('content')
                    </div><!-- container -->

                    <footer class="footer text-center text-sm-left">
                        &copy; 2020 Футбольная индустрия "Школа мяча"
                    </footer>
                </div>
                <!-- end page content -->
            </div>
        </div>
        <!-- end page-wrapper -->


        <!-- jQuery  -->
        <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('assets/js/metisMenu.min.js') }}"></script>
        <script src="{{ asset('assets/js/waves.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.slimscroll.min.js') }}"></script>

        <script src="{{ asset('tagsinput/jquery.tagsinput.js') }}"></script>

        <script src="{{ asset('assets/plugins/dropify/js/dropify.min.js') }}"></script>
        <script src="{{ asset('assets/pages/jquery.form-upload.init.js') }}"></script>
        <script src="{{ asset('js/jquery.mask.min.js') }}"></script>

        <!-- App js -->
        <script src="{{ asset('assets/js/app.js') }}"></script>

    </body>
</html>
