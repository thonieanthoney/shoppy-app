<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Item List</title>


        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.4/css/bulma.min.css" integrity="sha512-HqxHUkJM0SYcbvxUw5P60SzdOTy/QVwA1JJrvaXJv4q7lmbDZCmZaqz01UPOaQveoxfYRv1tHozWGPMcuTBuvQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

       <body class= 'container'>
        <h1 class="title is-3">Update Item</h1>
        <hr>
       <div class="field">
  <label class="label">Quantity</label>
  <div class="control">
    <input class="input" type="number" placeholder="Number input">
  </div>
  <div class="field">
  <label class="label">Item</label>
  <div class="control">
    <input class="input" type="text" placeholder="Text input">
  </div>
  <div class="field">
  <label class="label">Cost</label>
  <div class="control">
    <input class="input" type="text" placeholder="Text input">
  </div>
</div>
<div class="field is-grouped">
  <div class="control">
    <button class="button is-link">Add Item</button>
  </div>
  <div class="control">
    <a href="/" class="button is-link is-light">Cancel</a>
  </div>
</div>
       </body>
</html>
