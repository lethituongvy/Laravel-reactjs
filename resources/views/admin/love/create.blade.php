<!DOCTYPE html>
<html>
<style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
#form{
    width: 600px;
    margin-left: 30%;
}
</style>
<body>
<center>
<h3>Using CSS to style an HTML Form</h3>
</center>


<div id ='form'>
  <form action="/admin/love/create" method='POST' enctype="multipart/form-data">
  @csrf 
    <label for="fname">Name</label>
    <input type="text" id="fname" name="name" placeholder="Your name..">
    <label for="lname">Age</label>
    <input type="text" id="lname" name="ages" placeholder="Your last Age..">
    <label for="lname">Address</label>
    <input type="text" id="lname" name="address" placeholder="Your last Address..">
    <label for="lname">Facebook</label>
    <input type="text" id="lname" name="facebook" placeholder="Your last Facebook..">
    <label for="lname">Job</label>
    <input type="text" id="lname" name="job" placeholder="Your last Job..">
    <label for="lname">Image</label>
    <input type="file" id="lname" name="image" placeholder="Your last Image.."><br/>
    <label for="lname">Height</label>
    <input type="text" id="lname" name="height" placeholder="Your last Height..">
    <label for="lname">Weight</label>
    <input type="text" id="lname" name="weight" placeholder="Your last Weight..">
    <label for="lname">Description</label>
    <input type="text" id="lname" name="description" placeholder="Your last Description..">
    <label for="lname">Price</label>
    <input type="text" id="lname" name="price" placeholder="Your last Price..">

    <label for="country">Category</label>
    <select id="category_id" name="category">
    @foreach($categories as $categorie)
    <option value="{{$categorie->id}}">{{$categorie->name}}</option>
    @endforeach
    </select>
    <button type="submit">Add</button>
  </form>
</div>

</body>
</html>
