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
</style>
<body>

<h3>Using CSS to style an HTML Form</h3>

<div>
  <form action="{{'/admin/love/'.$loves->id}}" method='POST' enctype="multipart/form-data">
  @csrf 
  @method("PATCH")
    <label for="fname">Name</label>
    <input type="text" id="fname" name="name" placeholder="Your name.." value='{{$loves->name}}'>

    <label for="lname">Age</label>
    <input type="text" id="lname" name="ages" placeholder="Your last name.." value='{{$loves->ages}}'>
    <label for="lname">address</label>
    <input type="text" id="lname" name="address" placeholder="Your last name.." value='{{$loves->address}}'>
    <label for="lname">facebook</label>
    <input type="text" id="lname" name="facebook" placeholder="Your last name.." value='{{$loves->facebook}}'>
    <label for="lname">job</label>
    <input type="text" id="lname" name="job" placeholder="Your last name.." value='{{$loves->job}}'>
    <label for="lname">image</label>
    <input type="text" id="lname" name="image" placeholder="Your last name.." value='{{$loves->image}}'>
    <label for="lname">height</label>
    <input type="text" id="lname" name="height" placeholder="Your last name.." value='{{$loves->height}}'>
    <label for="lname">weight</label>
    <input type="text" id="lname" name="weight" placeholder="Your last name.." value='{{$loves->weight}}'>
    <label for="lname">description</label>
    <input type="text" id="lname" name="description" placeholder="Your last name.." value='{{$loves->description}}'>
    <label for="lname">price</label>
    <input type="text" id="lname" name="price" placeholder="Your last name.." value='{{$loves->price}}'>
    <label for="country">category</label>
    <select id="category_id" name="category" >
    @foreach($categories as $categorie)
    <option value="{{$categorie->id}}">{{$categorie->name}}</option>
    @endforeach
    </select>
  <button type='submit'>Update</button>
  </form>
</div>

</body>
</html>
