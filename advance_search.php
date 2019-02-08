<?php   // include("header.php"); ?>


<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Real Fit Pro User Sign Up</title>

        <link href="https://blackrockdigital.github.io/startbootstrap-shop-homepage/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        
        <link rel="shortcut icon" href="images/logo/rfpLogo.png">
        <link href="css/style.css" rel="stylesheet">
        <!-- <style type="text/css">
            body{
                color: #fff;                
                background-image: url("image/bg1_1.png");
                background-size: cover;
                font-family: 'Roboto', sans-serif;
                background-repeat: no-repeat;
            }
            .form-control{
                height: 40px;
                box-shadow: none;
                color: #969fa4;
            }
            .form-control:focus{
                border-color: #5cb85c;
            }
            .form-control, .btn{        
                border-radius: 3px;
            }
            .signup-form{
                width: 400px;
                margin: 0 auto;
                padding: 70px 0 30px 0;
            }
            .signup-form h3{
                color: #636363;
                margin: 0 0 15px;
                position: relative;
                text-align: center;
            }
            .signup-form .hint-text{
                color: #999;
                margin-bottom: 30px;
                text-align: center;
            }
            .signup-form form{
                color: #999;
                border-radius: 3px;
                margin-bottom: 15px;
                background: #f2f2f2;
                box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
                padding: 30px;
            }
            .signup-form .form-group{
                margin-bottom: 20px;
            }
            .signup-form input[type="checkbox"]{
                margin-top: 3px;
            }
            .signup-form .btn{        
                font-size: 16px;
                font-weight: bold;      
                min-width: 140px;
                outline: none !important;
            }
            .signup-form .row div:first-child{
                padding-right: 10px;
            }
            .signup-form .row div:last-child{
                padding-left: 10px;
            }       
            .signup-form a{
                color: #fff;
                text-decoration: underline;
            }
            .signup-form a:hover{
                text-decoration: none;
            }
            .signup-form form a{
                color: #5cb85c;
                text-decoration: none;
            }   
            .signup-form form a:hover{
                text-decoration: underline;
            }  
            .signup-form form .error{
                color: #be2032;
                padding: 0 !important;
            }

            .button-red{
                background-color:#be2032;
                color:#fff;
            }
        </style>!-->
    </head>
    <body>
    
<?php include("header.php"); ?>
   
<style type="text/css">

.bg-dark {
    background-color: rgba(190, 32, 50, 0.7) !important;
}

  .switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

/* Hide default HTML checkbox */
.switch input {display:none;}

/* The slider */
.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}

body{
                color: #636363;                
              /*  background-image: url("image/bg1_1.png");*/
                background-color: #f2f2f2;
                background-size: cover;
                font-family: 'Roboto', sans-serif;
                background-repeat: no-repeat;
            }
            .form-control{
                height: 40px;
                box-shadow: none;
                color: #969fa4;
            }
            .form-control:focus{
                border-color: #5cb85c;
            }
            .form-control, .btn{        
                border-radius: 3px;
            }
           
            .search_result h3{
                color: #636363;
                margin: 0 0 15px;
                position: relative;
                text-align: center;
            }
            .search_result .hint-text{
                color: #999;
                margin-bottom: 30px;
                text-align: center;
            }
            .search_result form{
                color: #999;
                border-radius: 3px;
             /*   margin-bottom: 15px;
                background: #f2f2f2;
                box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
                padding: 30px;
*/            }
            .search_result .form-group{
                margin-bottom: 20px;
            }
            .search_result input[type="checkbox"]{
                margin-top: 3px;
            }
           
              
            .search_result a{
                color: #999;
                text-decoration: underline;
            }
            .search_result a:hover{
                text-decoration: none;
            }
            .search_result form a{
                color: #5cb85c;
                text-decoration: none;
            }   
            .search_result form a:hover{
                text-decoration: underline;
            }  
            .search_result form .error{
                color: #be2032;
                padding: 0 !important;
            }

            .button-red{
                background-color:#be2032;
                color:#fff;
            }
            .card-body {
                background: #f2f2f2;
                color: #999;
            }
            .cost-items{
                  padding-left: 0;
                  margin-bottom: 0;
                  list-style: none;
            }
</style>
<!-- Page Content -->

<div class="container" id="app" style="padding-top: 50px;">
  <div class="row">
    <div class="col-lg-12">
      <h3 class="my-4">Advance Search</h3>
    </div>
  </div>
  <div class="row">
    <div class="col-md-3">
      <div class="card">
        <article class="card-group-item">
          <header class="card-header">
            <h6 class="title">Search</h6>
          </header>
          <div class="filter-content">
            <div class="card-body">
              <form method="GET" action="advance_search.php">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Search" name="q" v-model="textInput">
                  <div class="input-group-append">
                    <button class="btn btn-primary" type="submit"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </form>

             <div class="row mt-5">
                <div class="col-8 "><h5>Show Filters</h5></div>
                <div class="col-4">
                  <!-- Rounded switch -->
              <label class="switch">
                <input type="checkbox" v-model="filter">
                <span class="slider round"></span>
              </label>
                </div>
             </div>
            </div> <!-- card-body.// -->
          </div>
        </article> <!-- card-group-item.// -->
      </div> <!-- card.// -->
    </div>
     <div class="col-md-3" v-if="filter" >
      <div class="card">
        <article class="card-group-item">
          <header class="card-header">
            <h6 class="title">Price</h6>
          </header>
          <div class="filter-content">
            <div class="card-body">
              <form>
                <label class="form-check">
                  <input class="form-check-input" type="checkbox" value="0" v-model="priceRange">
                  <span class="form-check-label">
                    less than 100$
                  </span>
                </label> <!-- form-check.// -->
                <label class="form-check">
                  <input class="form-check-input" type="checkbox" value="1" v-model="priceRange">
                  <span class="form-check-label">
                    100$ - 200$
                  </span>
                </label>  <!-- form-check.// -->
                <label class="form-check">
                  <input class="form-check-input" type="checkbox" value="2" v-model="priceRange">
                  <span class="form-check-label">
                    200$ - 300$
                  </span>
                </label>  <!-- form-check.// -->
                <label class="form-check">
                  <input class="form-check-input" type="checkbox" value="3" v-model="priceRange">
                  <span class="form-check-label">
                    more than 300$
                  </span>
                </label>
              </form>
            </div> <!-- card-body.// -->
          </div>
        </article> <!-- card-group-item.// -->
      </div> <!-- card.// -->
    </div>
    <div class="col-md-3" v-if="filter">
      <div class="card">
        <article class="card-group-item">
          <header class="card-header">
            <h6 class="title">Star Ratings </h6>
          </header>
          <div class="filter-content">
            <div class="card-body">
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="Check1" value="5" v-model="userRating">
                <label class="custom-control-label" for="Check1">&#9733; &#9733; &#9733; &#9733; &#9733;</label>
              </div> <!-- form-check.// -->
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="Check2" value="4" v-model="userRating">
                <label class="custom-control-label" for="Check2">&#9733; &#9733; &#9733; &#9733; &#9734;</label>
              </div> <!-- form-check.// -->
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="Check3" value="3" v-model="userRating">
                <label class="custom-control-label" for="Check3">&#9733; &#9733; &#9733; &#9734; &#9734;</label>
              </div> <!-- form-check.// -->
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="Check4" value="2" v-model="userRating">
                <label class="custom-control-label" for="Check4">&#9733; &#9733; &#9734; &#9734; &#9734;</label>
              </div> <!-- form-check.// -->
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="Check5" value="1" v-model="userRating">
                <label class="custom-control-label" for="Check5">&#9733; &#9734; &#9734; &#9734; &#9734;</label>
              </div> <!-- form-check.// -->
            </div> <!-- card-body.// -->
          </div>
        </article> <!-- card-group-item.// -->
      </div> <!-- card.// -->
    </div>
    <div class="col-md-3" v-if="filter">
      <div class="card">
       <article class="card-group-item">
          <header class="card-header">
             <h6 class="title">Certified</h6>
          </header>
          <div class="filter-content">
             <div class="card-body">
                <div class="form-row">
                   <div class="custom-control custom-radio custom-control-inline">
                      <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input" v-model ="certified" value="yes">
                      <label class="custom-control-label" for="customRadioInline1">Yes</label>
                   </div>
                   <div class="custom-control custom-radio custom-control-inline">
                      <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input" v-model ="certified" value="no">
                      <label class="custom-control-label" for="customRadioInline2">No</label>
                   </div>
                </div>
             </div>
             <!-- card-body.// -->
          </div>
       </article>
       <!-- card-group-item.// -->
      </div>
      <!-- card.// -->
    </div>
    <div class="col-md-3" v-if="filter">
      <div class="card">
       <article class="card-group-item">
          <header class="card-header">
             <h6 class="title">Service</h6>
          </header>
          <div class="filter-content">
             <div class="card-body">
               <div class="custom-control custom-checkbox" v-for="s in services">
                  <input type="checkbox" class="custom-control-input" :id="'chk'+s.id" :value="s.id"  v-model="selectService">
                  <label class="custom-control-label" :for="'chk'+s.id">{{s.name}}</label>
              </div> <!-- form-check.// -->
             </div>

             <!-- card-body.// -->
          </div>
       </article>
       <!-- card-group-item.// -->
      </div>
      <!-- card.// -->
    </div>
    <div class="col-md-3" v-if="filter">
      <div class="card">
       <article class="card-group-item">
          <header class="card-header">
             <h6 class="title">City</h6>
          </header>
          <div class="filter-content">
             <div class="card-body">
                <div class="form-row">
                   <label for="sel1">Select City</label>
                    <select class="form-control" id="sel1" v-model="selectCities">
                      <option value="">Select City</option>
                      <option :value="c.city" v-for="c in cities">{{c.city}}</option>
                    </select>
                </div>
             </div>
             <!-- card-body.// -->

          </div>
       </article>
       <!-- card-group-item.// -->
      </div>
      <!-- card.// -->
    </div>
  </div>
  <div class="row">
    <div class="col-lg-12" style="display: inline-block; padding-top: 50px;">
       <div class="row">
          <div class="col-lg-4 col-md-4 mb-3" v-for="r in result">
             <div class="card h-100">
               <div class="card-body">
                <div class="row">
                  <div class="col-5 mt-2 pl-1 pr-0">
                    <a :href="'trainerprofilepage.php?id='+r.user_id"><img class="card-img-top" v-bind:src="r.picture" alt="" ></a>
                  </div>
                  <div class="col-7">
                    <div class="row">
                     <h5 class="card-title col-6 pr-0">
                      <a :href="'trainerprofilepage.php?id='+r.user_id" style="text-transform: capitalize;">{{ r.first_name + ' ' + r.last_name }}</a>
                   </h5>
                   <small class="card-text col-6 text-right"> {{calculateAge(new Date(r.birth_date))}} Years</small>
                   </div>
                   <h6>
                     <ul class="cost-items" v-for="(v,k) in JSON.parse(r.cost ? r.cost : '{}')">
                      <li>
                        {{ {pt:'Personal Trainer', yg: 'Yoga', nu: 'Nutritionist', mt: 'Massage Therapy', pc: 'Prep Coach'}[k] }}: ${{ v }}
                      </li>
                     </ul>
                   </h6>
                   <p class="card-text float-right"><img :src="getServiceImage(s)" v-for="s in r.services.split(',')" width="30px"></p>
                  </div>
                </div>
              </div>
              <div class="card-footer">
                   <h5 class="text-muted my-0"><span v-for='rate in (r.rating-0)'> &#9733; </span> <span v-for='rate in (5-r.rating)'> &#9734; </span> </h5>
                </div>
             </div>
          </div>
       </div>
       <!-- /.row -->
    </div>
    <!-- /.col-lg-9 -->
  </div>
</div>
    
<?php include("footer.php"); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.16/vue.min.js"></script>
<script type="text/javascript">
  function getQueryStringValue (key) {
    return decodeURIComponent(window.location.search.replace(new RegExp("^(?:.*[&\\?]" + encodeURIComponent(key).replace(/[\.\+\*]/g, "\\$&") + "(?:\\=([^&]*))?)?.*$", "i"), "$1"));
  }
</script>
<script type="text/javascript">
  $app = new Vue({
  el:'#app',
  data:{
    textInput : '',
    priceRange : [],
    userRating : [],
    q:'',
    range:'',
    rating:'',
    certified :'',
    cert:'',
    query:'',
    result:'',
    filter:true,
    services:[],
    selectService : [],
    serviceQuery:'',
    cities :[],
    selectCities:'',
    cityQuery:'',
  },
  methods:{
    search:function () {
      var self = this;
      if(self.textInput != ''){
        self.q = self.textInput;
      }
      self.query = ''
      if(self.filter){
        self.range = ''
        if(self.priceRange.length > 0){
          
          self.priceRange.forEach(function (item , index) {
            if(index != 0){
              self.range += ' OR '  
            }else{
              self.range = ''
              self.range += ' AND ('
            }
            if (item == 0) {
              self.range += '(cost < 100)'
            } else if (item == 1) {
              self.range += '(cost > 101 AND cost < 200)'
            } else if (item == 2) {
              self.range += '(cost > 201 AND cost < 300)'
            } else if (item == 3) {
              self.range += '(cost > 300)'
            }
          });
          self.range +=')'
        }
        self.rating = ''
        if(self.userRating.length >0){
          // self.rating = '('
          self.userRating.forEach(function (item ,index) {
            if(index != 0){
              self.rating += ' OR '
            }else if(index == 0){
              self.rating += ' AND ( '
            }
            self.rating += 'rating = ' + item
          });
          self.rating = self.rating + ')'
        }
        self.cityQuery = '';
        if (self.selectCountries != '') {
          self.cityQuery = " AND city LIKE '%"+self.selectCities+"%'"
        }
        // self.CountryQuery = ''
        self.serviceQuery = ''
        if (self.selectService.length > 0) {
          // console.log(self.selectService);

          self.selectService.forEach(function (item,index) {
             if(index != 0){
              self.serviceQuery += ' OR '
            }else if(index == 0){
              self.serviceQuery =''
              self.serviceQuery += ' AND ( '
            }
            self.serviceQuery += "services LIKE '%"+item+"%'" 
          })
          self.serviceQuery += ')'
        }
        if(self.certified == 'yes'){
          self.cert = ' AND certificate != ""'
        }else if (self.certified == 'no') {
          self.cert = ' AND certificate == ""'
        }
        self.query = '';
        self.query = self.range+self.rating+self.cert+self.cityQuery+self.serviceQuery

      }
      // console.log(self.query);

       $.post('ajax_search_result.php' , {
          'q' : self.q,
          'query' : self.query
       },function (result) {
         // console.log(result);
         self.result = JSON.parse(result);

         // console.log(self.result);
       });
    },
    calculateAge:function (birthday) { // birthday is a date
        var ageDifMs = Date.now() - birthday.getTime();
        var ageDate = new Date(ageDifMs); // miliseconds from epoch
        return Math.abs(ageDate.getUTCFullYear() - 1970);
    },
    getServices:function () {
       var self = this;

       $.post('get-services.php',function (result) {
         // console.log(result);
        self.services = [{
          id: 'pt',
          name: 'Personal Trainer' 
        },{
          id: 'yg',
          name: 'Yoga' 
        },{
          id: 'nu',
          name: 'Nutritionist' 
        },{
          id: 'mt',
          name: 'Massage Therapy' 
        },{
          id: 'pc',
          name: 'Prep Coach' 
        }]
       });
    },
    getServiceImage:function (id) {
       var self = this;
      
      var temp;
      self.services.forEach(function(item){
        if(item.id==id){
          temp = item.image;
        }
      });
      return temp;
    },
    getCities:function () {
       var self = this;
      $.post('get-cities.php',function (result) {
         // console.log(result);

         self.cities = JSON.parse(result);
         // console.log(self.services[1]);
       });
    }
  },
  created:function () {
    var self = this;
    self.textInput = getQueryStringValue('q');
     self.getServices();
     self.getCities();
    self.search();
  },
  watch:{
    priceRange:function () {
      var self = this;
     
      self.search();
    },
    userRating:function () {
      var self = this;
      self.search();
    },
    certified:function () {
      var self = this;
      self.search();
    },
    filter:function () {
      var self = this;
      self.search();
    },
    selectService:function () {

       var self = this;
       // console.log(self.selectService);
      self.search();
    },
    selectCities:function () {
       var self = this;
      self.search();
    }
  }
  })
</script>
 <script type="text/javascript">
        $(function () {
            // $('#search').hide();
            $('.search-trigger').on('click',function () {
                $('#main').hide();
                $('#search').show();
                $('.header-search').focus();

            });
            $('.header-search').blur(function () {
                $('#search').hide();
                 $('#main').show();
            });
        })
    </script>
