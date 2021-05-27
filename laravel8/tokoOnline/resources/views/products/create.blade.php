<h1>Create Products</h1>
 <form action="" method="POST">
     @csrf
     Name : <input type="text" name="name"><br><br>
     Description : <input type="text" name="description"><br><br>
     Price : <input type="number" name="price"><br><br>
     Image URL : <input type="text" name="image_url"><br><br>

     <button type="submit">Save</button>
 </form>
