<!DOCTYPE html>
<html lang="en">


<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Temperature Converter</title>
  <link rel="stylesheet" href="/style.css">
</head>
<style>
  /* style.css */
body {
  font-family: Arial, sans-serif;
  background-color: #f0f0f0;
}

form {
  max-width: 400px;
  margin: 0 auto;
  padding: 20px;
  background-color: #fff;
  border-radius: 8px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h1 {
  text-align: center;
  margin-bottom: 20px;
}

label {
  display: block;
  margin-bottom: 5px;
}

input[type="text"],
select {
  width: 100%;
  padding: 8px;
  margin-bottom: 10px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

button {
  width: 100%;
  padding: 10px;
  background-color: #4caf50;
  color: #fff;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

button:hover {
  background-color: #45a049;
}

p#converted_temperature {
  margin-top: 20px;
  font-weight: bold;
}

</style>

<body>

  <form action="./php/table.php" method="POST">
    <h1>Temperature Converter</h1>
    <label>Input Temperature unit:</label>
    <input type="radio" id="fahrenheit" name="unit" value="fahrenheit" checked />
    <label for="fahrenheit">Fahrenheit</label>

    <input type="radio" id="celsius" name="unit" value="celsius" />
    <label for="celsius">Celsius</label>


    <label for="text">Enter the temperature Value :</label>
    <input type="text" id="name" name="name" placeholder="Enter value..." required />
    <select name="temperatureUnit" id="temperatureUnit">
      <option value="celsius">degree celsius</option>
      <option value="fahrenheit">degree Fahrenheit</option>
    </select>



    <label>Output Temperature unit:</label>
    <input type="radio" id="fahrenheit" name="convert-unit" value="fahrenheit" checked />
    <label for="fahrenheit">Fahrenheit</label>
    <input type="radio" id="celsius" name="convert-unit" value="celsius" />
    <label for="celsius">Celsius</label>


    <button type="button" onclick="convertTemperature()">Convert</button>
  </form>

  <p id="converted_temperature"></p>



  <script src="app.js"></script>
</body>

</html>

<?php

?>;