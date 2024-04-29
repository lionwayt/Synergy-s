<?php 
session_start();

include("php/config.php");
if(!isset($_SESSION['valid'])){
  header("Location: index.php");
}



?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title>Home</title>
  </head>
  <body>
    <div class="nav">
      <div class="logo">
        <p>SYNERGY</p>
      </div>
      <div class="right-links">
        <a href="php/logout.php"> <button class="btn">
           Log out 
        </button></a>
      </div>
    </div>
    <main>
        <div class="main-box top">
            <div class="top">
                
                 <button class="open-btn" onclick="openForm()" >New Customer</button>
                    
            </div>
            <div class="col">
              <div class="box">
                <table class="table">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Picture</th>
                      <th>Names</th>
                      <th>Age</th>
                      <th>Phone</th>
                      <th>Sub-city</th>
                      <th>Woreda</th>
                     
                      <th>Heardfrom</th>
                      <th>Payment</th>
                      <th>Payments</th>
                      <th>Dates</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody id="data">
                   
                    <tr>
                  <td>1</td>
                  <td><img src="" alt="" width="50" height="50"></td>
                  <td>Abeba</td>
                  <td>30</td>
                  <td>123456</td>
                  <td>kolfe</td>
                  <td>4</td>
                  <td>tik</td>
                  <td>
                  <button class="btn">90</button>
                  </td>
                  <td>
                  <button class="btn">700</button>
                  </td>
                  <td>12/2/2000</td>
                  <td>
                    <button class="btn">Update</button>
                    <button class="btn">Delete</button>
                  </td>
                  </tr>
                  <tr>
                  <td>2</td>
                  <td><img src="" alt="" width="50" height="50"></td>
                  <td>Abeba</td>
                  <td>30</td>
                  <td>123456</td>
                  <td>kolfe</td>
                  <td>4</td>
                  <td>tik</td>
                  <td>
                  <button class="btn">90</button>
                  </td>
                  <td>
                  <button class="btn">700</button>
                  </td>
                  <td>12/2/2000</td>
                  <td>
                    <button class="btn">Update</button>
                    <button class="btn">Delete</button>
                  </td>
                  </tr>
                  <tr>
                  <td>3</td>
                  <td><img src="" alt="" width="50" height="50"></td>
                  <td>Abeba</td>
                  <td>30</td>
                  <td>123456</td>
                  <td>kolfe</td>
                  <td>4</td>
                  <td>tik</td>
                  <td>
                  <button class="btn">90</button>
                  </td>
                  <td>
                  <button class="btn">700</button>
                  </td>
                  <td>12/2/2000</td>
                  <td>
                    <button class="btn">Update</button>
                    <button class="btn">Delete</button>
                  </td>
                  </tr>
                  <tr>
                  <td>4</td>
                  <td><img src="" alt="" width="50" height="50"></td>
                  <td>Abeba</td>
                  <td>30</td>
                  <td>123456</td>
                  <td>kolfe</td>
                  <td>4</td>
                  <td>tik</td>
                  <td>
                  <button class="btn">90</button>
                  </td>
                  <td>
                  <button class="btn">700</button>
                  </td>
                  <td>12/2/2000</td>
                  <td>
                    <button class="btn">Update</button>
                    <button class="btn">Delete</button>
                  </td>
                  </tr>
                  <tr>
                  <td>5</td>
                  <td><img src="" alt="" width="50" height="50"></td>
                  <td>Abeba</td>
                  <td>30</td>
                  <td>123456</td>
                  <td>kolfe</td>
                  <td>4</td>
                  <td>tik</td>
                  <td>
                  <button class="btn">90</button>
                  </td>
                  <td>
                  <button class="btn">700</button>
                  </td>
                  <td>12/2/2000</td>
                  <td>
                    <button class="btn">Update</button>
                    <button class="btn">Delete</button>
                  </td>
                  </tr>
                  </tbody>
                </table>
              </div>
            </div>
        </div>
    </main>
  <div class="modal" id="userForm">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="title">Fill The Form</h4>
          <button type="button" class="close"> cancel</button>
          </div>
       <div class="modal-body">

          <form action="#"  id="myForm">
          <div class="card">
            <label for="imgInput" class="upload">
            <input type="file" name="" id="imgInput" >
            </label>
            <img src="" alt="">
          </div>

          <div class="inputField">
            <div>
            <label for="name">Name:</label>
            <input type="text" name="" id="name" required/>
            </div>
            <div >
            <label for="age">Age:</label>
            <input type="number" name="" id="age" />
            </div>
            <div >
            <label for="phone">Phone No:</label>
            <input type="number" name="" id="num" minlength="10" maxlength="10" req />
            </div>
            <div >
            <label for="sub-city">Sub-city:</label>
            <input type="text" name="" id="sub"  required />
            </div>
            <div >
            <label for="woreda">Woreda:</label>
            <input type="number" name="" id="woreda"  />
            </div>
            <div >
            <label for="from">Heard From:</label>
            <input type="text" name="" id="from" />
            </div>
            <div >
            <label for="date">Date:</label>
            <input type="date" name="" id="date" />
            </div>
            <div >
            <label for="payment">90:</label>
            <input type="checkbox" name="" id="nine" />
            </div>
            <div >
            <label for="pay">700:</label>
            <input type="checkbox" name="" id="seven" />
            </div>
            <div class="modal-footer">
            <button>
            <input
              type="submit"
              name="submit"
             
              value="Submit"
              form="myForm"
              onclick="closeForm()"
              required
            />
            </button>
            </div>
          </div>
         

          </form>
     </div>
 
     
     
          
           
 
     
      </div>
    </div>

  </div>
 
  <script>
    function openForm(){
      document.getElementById("userForm").style.display ="block";

    }
    function closeForm(){
      document.getElementById("useForm").style.display="none";
    }
  </script>
  </body>
 
</html>
