<?php include('header.php');?>
<?php include('connection.php');?>

<?php    
    if($_SESSION){
      if($_SESSION['role']=="user")
      header("location:projects.php");  
      } 
      else{
      header("location:session.php");   
    }  
?>

<?php
// Aqui se reciben los datos del formulario
//Ademas de instancia una conexion, se crea una instruccion sql tipo INSERT y se ejecuta.
//CREATE A PROPERTY

if($_POST){

    $nameProject=(isset ($_POST['nameProject']))? $_POST['nameProject']:"" ;
    //image
    $date = new DateTime();
    $image= $date->getTimeStamp()."_".$_FILES['file']['name'];
    $image_temp=$_FILES['file']['tmp_name'];
    move_uploaded_file($image_temp,"Images/".$image);
    //description
    $description=(isset ($_POST['description']))? $_POST['description']:"" ;
    //Address
    $address=(isset ($_POST['address']))? $_POST['address']:"" ;
    //city
    $city=(isset ($_POST['city']))? $_POST['city']:"" ;
    //status
    $status=(isset ($_POST['status']))? $_POST['status']:"" ;
    //price
    $price=(isset ($_POST['price']))? $_POST['price']:"" ;

   /* $sentence=$connection->prepare("INSERT INTO `properties` (`id`, `name`, `image`, `description`, 
    `address`, `city`, `status`, `price`) VALUES (NULL, '$nameProject', '$image', '$description',
    '$address', '$city', '$status', '$price');");
   
    $sentence->execute();*/

    $sentence=$connection->prepare("INSERT INTO properties(id, name, image, description, 
    address, city, status, price) VALUES (NULL, :name, :image, :description,
    :address, :city, :status, :price)");

    //$sentence=$connection->prepare($sql);

    $sentence->bindParam(":name",$nameProject);
    $sentence->bindParam(":image",$image);
    $sentence->bindParam(":description",$description);
    $sentence->bindParam(":address",$address);
    $sentence->bindParam(":city",$city);
    $sentence->bindParam(":status",$status);
    $sentence->bindParam(":price",$price);
  
    $sentence->execute();

}

    //DELETE A PROPERTY
    //for delete a property
    if(isset($_GET['txtID'])){
        
        $txtID=( isset($_GET['txtID']) )?$_GET['txtID']:"";
       // $sentence=$connection->prepare("DELETE FROM `properties` WHERE id=$txtID");
        $sentence=$connection->prepare("DELETE FROM properties WHERE id=:id");//nuevo
        $sentence->bindParam(":id",$txtID);//nuevo
        $sentence->execute();
    }
     //To print de data into table admin
     $sentence=$connection->prepare("SELECT * FROM `properties`");     
     $sentence->execute();   
     $properties = $sentence;


     echo "Welcome ". $_SESSION['username'];

?>

<br/>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-4">
        <!----------->                      
          <div class="card fs-5 mb-5">
                <div class="card-header text-uppercase fw-bold">
                    Project Information
                </div>
                <div class="card-body border border-3">          
                    <form action="adminSite.php" method="post" enctype="multipart/form-data">
                        <!-- nameproject es el nombre que entro por teclado, y que se guarda en la columna name de la base de datos-->
                        Name of project: <input required class="form-control border border-3" type="text" name="nameProject" id=""> 
                        <br/>
                        Image of project: <input required class="form-control border border-3" type="file" name="file" id="">
                        <br/>
                        Description:
                        <textarea required class="form-control border border-3" name="description" id="" cols="30" rows="4"></textarea>
                        <br/>
                        Address: <input required class="form-control border border-3" type="text" name="address" id=""> 
                        <br/>
                        city: <input required class="form-control border border-3" type="text" name="city" id=""> 
                        <br/>
                        Status:<input required class="form-control border border-3" type="text" name="status" id=""> 
                        <br/>
                        Price: <input required class="form-control border border-3" type="text" name="price" id="">
                        <br/>

                        <input class="btn btn-secondary text-uppercase fw-bold fs-7 text-white" type="submit" value="Send project">
                    </form>
                </div>  
            </div>
        <!-------->
        </div>
      
        <div class="col-md-8">
     <!----------->                        
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Image</th>
                            <th>Descripcion</th>
                            <th>Address</th>
                            <th>City</th>
                            <th>Status</th>
                            <th>Price</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                      <?php foreach($properties as $property) { ?>
                        <tr>
                            <td><?php echo $property['id']; ?></td>
                            <td><?php echo $property['name']; ?></td>

                            <td>                               
                                <img width="150" src="Images/<?php echo $property['image']; ?>" alt="" srcset="">                               
                            </td>

                            <td><?php echo $property['description']; ?></td>
                           
                            <td><?php echo $property['address']; ?></td>
                            <td><?php echo $property['city']; ?></td>

                            <td><?php echo $property['status']; ?></td>
                            <td><?php echo $property['price']; ?></td>

                            <td> <a class="btn btn-danger" href="adminSite.php?txtID=<?php echo $property['id']; ?>" role="button">Delete</a></td>

                            <td> <a class="btn btn-info text-white" href="edit.php?txtID=<?php echo $property['id']; ?>" role="button">Edit</a></td>
                            
                        </tr>
                       <?php } ?>
                    </tbody>
                </table>
            </div>
    <!----------->            
        </div>      
    </div>
</div>

<?php include('footer.php');  ?>