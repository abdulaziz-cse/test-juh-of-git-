<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
}

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #fff4e3;
  padding: 5px 20px 15px 20px;

  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ffe3b8;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #ffa61c;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}


a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
</style>
</head>
<body>

<h2>Patient Infotmation</h2>
<p>.</p>
<div class="row">
  <div class="col-75">
    <div class="container">
        {!! Form::open(['action'=>'PostController@storemony', 'method'=>'POST','enctype'=>'multipart/form-data' ]) !!}

        <div class="row">
          <div class="col-50">
            <h3>Patient Infotmation</h3>
        
       
            <label for="fname"><i class=""></i> Full Name</label>
            <input type="text" id="fname" name="name" placeholder="">

            <label for="adr"><i class=""></i> Number of Case</label>
            <input type="text" id="adr" name="Phone" placeholder="">
        

            <label for="adr"><i class=""></i> Nationality Id</label>
            <input type="text" id="adr" name="National" placeholder="">
    
            
            <div class="form-group">
                <label for="gander">Age</label>
                <select name="type" class="form-control">
                  <option selected>Select</option>            
                  <option value="danger" > ضروري </option>                    
                  <option value="good" > غير ضروري </option>                              
                </select>
                               </div>

            
          
            <label for="cname">gander</label>
            <input type="text" id="cname" name="gander" placeholder="">

               
            <label for="cname">Age</label>
            <input type="text" id="cname" name="Age" placeholder="">

    

          </div>

          <div class="col-50">

            <div class="icon-container">
<br><br><br>
            </div>
     
            <label for="ccnum">Weight</label>
            <input type="text" id="ccnum" name="Weight" placeholder="">


            <label for="ccnum">cost</label>
            <input type="text" id="ccnum" name="cost" placeholder="">

          


                        <div class="text-center mb-3">
                          <div class="text-center mb-3">
                            <div class="text-center mb-3"></div>
                              {!! Form::submit('Save', ['class'=>'btn btn-main-primary btn-block btn-rounded z-depth-1a']) !!}
                              
                        </a>
                          </div>
                        </div>






      {!! Form::close() !!}

    </div>
  </div>


</body>
</html>
