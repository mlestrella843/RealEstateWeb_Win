<?php include('header.php');?>
<?php include('connection.php');?>

<?php
    
    if( isset( $_GET['txtID'] ) ){
        //Retreving data of correspondent id
        $txtID=( isset($_GET['txtID']) )?$_GET['txtID']:"";
        $sentence=$connection->prepare("SELECT * FROM `properties` WHERE id=$txtID");
        $sentence->execute();

        $registro=$sentence->fetch(PDO::FETCH_LAZY);

       // $txtID=$registro['id'];
        $nameProject=$registro['name'];  
        $image= $registro['image'];
        $description=$registro['description'];
        $address=$registro['address'];
        $city=$registro['city'];
        $status=$registro['status'];
        $price=$registro['price'];
    }

    if($_POST){

        $txtID=( isset ($_POST['txtID']))? $_POST['txtID']:"";
        $nameProject=(isset ($_POST['nameProject']))? $_POST['nameProject']:"" ;
        $image=(isset ($_POST['image']))? $_POST['image']:""; 
        $description=(isset ($_POST['description']))? $_POST['description']:"" ;
        $address=(isset ($_POST['address']))? $_POST['address']:"" ;
        $city=(isset ($_POST['city']))? $_POST['city']:"" ;
        $status=(isset ($_POST['status']))? $_POST['status']:"" ;
        $price=(isset ($_POST['price']))? $_POST['price']:"" ;


        $sql="UPDATE properties
        SET 
        name=:name,
        image=:image,
        description=:description,
        address=:address,
        city=:city,
        status=:status,
        price=:price
        WHERE id=:id";


        $sentence=$connection->prepare($sql);

        $sentence->bindParam(":name",$nameProject);
        $sentence->bindParam(":image",$image);
        $sentence->bindParam(":description",$description);
        $sentence->bindParam(":address",$address);
        $sentence->bindParam(":city",$city);
        $sentence->bindParam(":status",$status);
        $sentence->bindParam(":price",$price);
        $sentence->bindParam(":id",$txtID);

        $sentence->execute();

    }

      $sentence=$connection->prepare("SELECT * FROM `properties`");     
      $sentence->execute();   
      $properties = $sentence;

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
                    <form action="edit.php" method="post" enctype="multipart/form-data">

                        <div class="mb-3">
                          <label for="txtID" class="form-label">ID:</label>
                          <input value="<?php echo $txtID; ?>" type="text"
                            class="form-control" readonly name="txtID" id="txtID" aria-describedby="helpId" placeholder="ID">
                        </div>

                        <!-- nameproject es el nombre que entro por teclado, y que se guarda en la columna name de la base de datos-->
                        Name of project: <input value="<?php echo $nameProject; ?>" class="form-control border border-3" type="text" name="nameProject" id=""> 
                        <br/>
                        Image of project: <input value="<?php echo $image; ?>" class="form-control border border-3" type="text" name="image" id="">
                        <br/>
                        Description:
                        <input value="<?php echo $description; ?>" class="form-control border border-3"  type="text" name="description" id="" cols="30" rows="4"></input>
                        <br/>
                        Address: <input value="<?php echo $address; ?>" class="form-control border border-3" type="text" name="address" id=""> 
                        <br/>
                        city: <input value="<?php echo $city; ?>" class="form-control border border-3" type="text" name="city" id=""> 
                        <br/>
                        Status:<input value="<?php echo $status; ?>" class="form-control border border-3" type="text" name="status" id=""> 
                        <br/>
                        Price: <input value="<?php echo $price; ?>" class="form-control border border-3" type="text" name="price" id="">
                        <br/>

                        <input class="btn btn-secondary text-uppercase fw-bold fs-7 text-white" type="submit" value="Update info">
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