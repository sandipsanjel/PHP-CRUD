<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Responsive Form</title>
  <style>
    * {
      box-sizing: border-box;
      /* padding: 10px; Reduce padding */
    }

    input[type=text], select, textarea {
      width: 100%;
      padding: 8px; /* Reduce padding */
      border: 1px solid #ccc;
      border-radius: 4px;
      resize: vertical;
    }

    label {
      font-weight: bold;
      margin-top: 8px; /* Reduce margin */
    }

    button[type=submit] {
      background-color: #4CAF50;
      color: white;
      padding: 10px 16px; /* Reduce padding */
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
      max-width: 400px; /* Limit width */
      margin: 250px; /* Center align horizontally */
      margin-top: 10px; /* Adjust vertical margin to center */
    }

    .row:after {
      content: "";
      display: table;
      clear: both;
    }
  </style>
</head>

<body>
  <h2>Contact Us</h2>

  <form action="formpro.php" method="POST">
    <div class="container">
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
        <button type="submit">Submit</button>
      </div>
    </div>
  </form>
</body>
</html>
