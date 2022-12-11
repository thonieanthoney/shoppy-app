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
        <h1 class="title is-3">Grocery List</h1>
        <hr>
       <table class="table is-fullwidth">
  <thead>
    <tr>
      <th><abbr title="Grocery list">Quantity</abbr></th>
      <th>Grocery Item</th>
      <th>Cost</th>
      <th></th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th>1</th>
        <td> <a href="/item">Grace Sausage</a> </td> 
        <td>$180</td>
        <td><a class="button is-small is-info" href="/updateitem">Update</a></td>
        <td><a class="button is-small is-danger" href="">Delete</a></td>
    </tr>
    <tr>
      <th>2</th>
        <td> <a href="">Corn Beef</a></td> 
        <td>$240</td> 
        <td><a class="button is-small is-info" href="/updateitem">Update</a></td>
        <td><a class="button is-small is-danger" href="">Delete</a></td>
    </tr>
    <tr>
      <th>3</th>
        <td> <a href="">Bread-White</a></td> 
        <td>$480</td>
        <td><a class="button is-small is-info" href="/updateitem">Update</a></td>
        <td><a class="button is-small is-danger" href="">Delete</a></td>
    </tr>
  </tbody>
</table>
       </body>
</html>
