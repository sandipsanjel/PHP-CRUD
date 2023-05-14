<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Responsive Form</title>
  <style>
    * {
      box-sizing: border-box;
    }

    input[type=text], select, textarea {
      width: 100%;
      padding: 12px;
      border: 1px solid #ccc;
      border-radius: 4px;
      resize: vertical;
    }

    label {
      font-weight: bold;
      margin-top: 12px;
    }

    button[type=submit] {
      background-color: #4CAF50;
      color: white;
      padding: 12px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      float: right;
    }

    button[type=submit]:hover {
      background-color: #45a049;
    }

    .container {
      border-radius: 5px;
      background-color: #f2f2f2;
      padding: 20px;
    }

    .row:after {
      content: "";
      display: table;
      clear: both;
    }

    @media screen and (max-width: 600px) {
      input[type=text], select, textarea {
        width: 100%;
      }

      button[type=submit] {
        width: 100%;
        margin-top: 12px;
      }
    }
  </style>
</head>

<body>
  <h2>Contact Us</h2>
<?php

?>

<form action="formpro.php" method="POST">

  <div class="container">
    <!-- <form action="#" method="post"> -->
      <div class="row">
        <div class="col-25">
          <label for="name">Name</label>
        </div>
        <div class="col-75">
          <input type="text" id="name" name="name" placeholder="Your name..">
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="email">Email</label>
        </div>
        <div class="col-75">
          <input type="text" id="email" name="email" placeholder="Your email..">
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="subject">Subject</label>
        </div>
        <div class="col-75">
          <select id="subject" name="subject">
            <option value="job">Job</option>
            <option value="fornt-end">fornt-end</option>
            <option value="ui-ux">ui-ux</option>
            <option value="Application development">Application development</option>
          </select>
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="message">Message</label>
        </div>
        <div class="col-75">
          <textarea id="message" name="message" placeholder="Write something.." style="height:200px"></textarea>
        </div>
      </div>
      <div class="row">
        <button  type="submit" >Submit</button>
      </div>
    </form>
  </div>

  <!-- <script>
    function submitForm() {
      // Code to submit form data goes here
      alert("Form submitted!");
    }
  </script> -->
</body>
</html>
