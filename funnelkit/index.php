<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>All Contacts</title>
        <link rel="icon" href="notebook-of-contacts.png" type="image/x-icon">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="style.css">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="script.js"></script>
    </head>
<body>
    <!-- Navigation bar start -->
    <nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
        <div class="container-fluid">
          <img src="user.png"><a class="navbar-brand" href="#">All Contacts</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav me-auto">
              <li class="nav-item">
                <a class="nav-link active" href="#">Home
                  <span class="visually-hidden">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" id="openModal" href="#" onclick="openModal()">Add Contact</a>
              </li>
              
              <!-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Separated link</a>
                </div>
              </li> -->
            </ul>
            <form class="d-flex">
              <input class="form-control me-sm-2" type="search" placeholder="Search">
              <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
     <!-- Navigation bar end -->


     <!-- Page heading start -->
      <div class="section-heading">
        <h1>Contact List</h1>
       <h5 class="text-body-secondary">A place to keep all your cherished connections close.</h5>
      </div>
    <!-- Page heading end -->

    <!-- Contact List start -->
     <!-- <div class="table-heading">
        <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">Contact image</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Mobile number</th>
                <th scope="col">Additional info</th>
              </tr>
            </thead>
            <tbody>
                
              <tr class="table-active">
                <th scope="row"><img src="user.png" alt="Image not added"></th>
                <td>Column content</td>
                <td>Column content</td>
                <td>Column content</td>
                <td><button type="button" class="btn btn-dark">View More/Edit</button></td>
              </tr>
              <tr class="table-danger">
                <th scope="row"><img src="user.png" alt="Image not added"></th>
                <td>Column content</td>
                <td>Column content</td>
                <td>Column content</td>
                <td><button type="button" class="btn btn-dark">View More/Edit</button></td>
              </tr>
              <tr>
                <th scope="row"><img src="user.png" alt="Image not added"></th>
                <td>Column content</td>
                <td>Column content</td>
                <td>Column content</td>
                <td><button type="button" class="btn btn-dark">View More/Edit</button></td>
              </tr>
              <tr class="table-primary">
                <th scope="row"><img src="user.png" alt="Image not added"></th>
                <td>Column content</td>
                <td>Column content</td>
                <td>Column content</td>
                <td><button type="button" class="btn btn-dark">View More/Edit</button></td>
              </tr>
              <tr class="table-secondary">
                <th scope="row"><img src="user.png" alt="Image not added"></th>
                <td>Column content</td>
                <td>Column content</td>
                <td>Column content</td>
                <td><button type="button" class="btn btn-dark">View More/Edit</button></td>
              </tr>
              <tr class="table-success">
                <th scope="row"><img src="user.png" alt="Image not added"></th>
                <td>Column content</td>
                <td>Column content</td>
                <td>Column content</td>
                <td><button type="button" class="btn btn-dark">View More/Edit</button></td>
              </tr>
              <tr class="table-warning">
                <th scope="row"><img src="user.png" alt="Image not added"></th>
                <td>Column content</td>
                <td>Column content</td>
                <td>Column content</td>
                <td><button type="button" class="btn btn-dark">View More/Edit</button></td>
              </tr>
              <tr class="table-info">
                <th scope="row"><img src="user.png" alt="Image not added"></th>
                <td>Column content</td>
                <td>Column content</td>
                <td>Column content</td>
                <td><button type="button" class="btn btn-dark">View More/Edit</button></td>
              </tr>
              <tr class="table-light">
                <th scope="row"><img src="user.png" alt="Image not added"></th>
                <td>Column content</td>
                <td>Column content</td>
                <td>Column content</td>
                <td><button type="button" class="btn btn-dark">View More/Edit</button></td>
              </tr>
              
            </tbody>
          </table>
     </div> -->

  <div class="table-heading">
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">Contact Image</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Mobile Number</th>
                <th scope="col">Additional Info</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Database connection
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "funnelkit_assignment";
            
            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Fetch data from the database
            $sql = "SELECT * FROM contact";
            $result = $conn->query($sql);
            

            // Bootstrap row classes
            $rowClasses = ['table-active', 'table-danger', 'table-primary', 'table-secondary', 'table-success', 'table-warning', 'table-info', 'table-light'];
            $rowClassIndex = 0;

            if ($result->num_rows > 0) {
                // Output data of each row
                while($row = $result->fetch_assoc()) {
                    // Apply alternating row class
                    $rowClass = $rowClasses[$rowClassIndex % count($rowClasses)];
                    echo "<tr class='$rowClass'>";
                    echo "<th scope='row'><img src='uploads/" . $row['contact_image'] . "' alt='Image not added' height='80px' width='80px' style='border-radius: 50%;'></th>";
                    echo "<td>" . $row['fname'] . " " . $row['mname'] . " " . $row['lname'] . "</td>";
                    echo "<td>" . $row['email'] . "</td>";
                    echo "<td>" . $row['cchome'] . " " . $row['contact_home'] . "</td>";
                    echo "<td><button type='button' class='btn btn-dark' onclick=\"openViewModal(".$row['Id'].")\">View More</button></td>";
                    
                    //echo "<td><button type='button' class='btn btn-dark' onclick=\"openEditModal()\">View More/Edit</button></td>";

                    echo "</tr>";

                    // Move to the next row class
                    $rowClassIndex++;
                }
            } else {
                echo "<tr><td colspan='5'>No contacts found</td></tr>";
            }

            $conn->close();
            ?>
        </tbody>
    </table>
          </div>
</div>
     <!-- Contact List end -->

     <!-- Hidden Modal start -->
     <div class="container" id="form">
        <form class="contact-form" id="cform" method="POST" enctype="multipart/form-data" action="./action.php">
            <button id="close-button" onclick="closeModal()" >X</button>
            <label for="file-input">
                <img id="image-preview" src="default-avatar.png" alt="">
            </label>
            <input id="file-input" type="file" accept="image/*" onchange="loadFile(event)" name="contact_image">
            <br>
            <label>Enter Name</label><br>
            <input type="text"  placeholder="First Name" name="fname" pattern="[A-Za-z]+">
            <input type="text" placeholder="Middle Name" pattern="[A-Za-z]+" name="mname">
            <input type="text" placeholder="Last Name" name="lname" pattern="[A-Za-z]+">
            <br>
            <label>Add Email</label><br>
            <input type="email" placeholder="Email" name="email">
            <br>
            <label>Add Mobile number</label><br>
            <select id="countryCode" name="cchome">
                <option value="+91">India (+91)</option>
                <option value="+1">United States (+1)</option>
                <option value="+44">United Kingdom (+44)</option>
                <option value="+61">Australia (+61)</option>
                <option value="+81">Japan (+81)</option>
                <option value="+49">Germany (+49)</option>
                <option value="+33">France (+33)</option>
                <option value="+86">China (+86)</option>
                <option value="+55">Brazil (+55)</option>
                <option value="+7">Russia (+7)</option>
                <option value="+34">Spain (+34)</option>
                <option value="+39">Italy (+39)</option>
                <option value="+52">Mexico (+52)</option>
                <option value="+27">South Africa (+27)</option>
                <option value="+234">Nigeria (+234)</option>
                <option value="+20">Egypt (+20)</option>
                <option value="+31">Netherlands (+31)</option>
                <option value="+62">Indonesia (+62)</option>
                <option value="+64">New Zealand (+64)</option>
                <option value="+65">Singapore (+65)</option>
                <!-- Add more country codes as needed -->
            </select>
            <input type="text" placeholder="Home +" name="contact_home" pattern="\d{10}" ><br>
            <select id="countryCode" name="ccwork">
                <option value="+91">India (+91)</option>
                <option value="+1">United States (+1)</option>
                <option value="+44">United Kingdom (+44)</option>
                <option value="+61">Australia (+61)</option>
                <option value="+81">Japan (+81)</option>
                <option value="+49">Germany (+49)</option>
                <option value="+33">France (+33)</option>
                <option value="+86">China (+86)</option>
                <option value="+55">Brazil (+55)</option>
                <option value="+7">Russia (+7)</option>
                <option value="+34">Spain (+34)</option>
                <option value="+39">Italy (+39)</option>
                <option value="+52">Mexico (+52)</option>
                <option value="+27">South Africa (+27)</option>
                <option value="+234">Nigeria (+234)</option>
                <option value="+20">Egypt (+20)</option>
                <option value="+31">Netherlands (+31)</option>
                <option value="+62">Indonesia (+62)</option>
                <option value="+64">New Zealand (+64)</option>
                <option value="+65">Singapore (+65)</option>
                <!-- Add more country codes as needed -->
            </select>
            <input type="text" placeholder="Work +" pattern="\d{10}" name="contact_work">
            <br>
            <label>Add Address</label><br>
            <input type="text" placeholder="Address Line 1" pattern="[A-Za-z0-9\s,.#-]+"  name="addl1">
            <input type="text" placeholder="Address Line 2" pattern="[A-Za-z0-9\s,.#-]+"  name="addl2">
            <input type="text" placeholder="State" pattern="[A-Za-z\s]+"  name="state">
            <input type="text" placeholder="Country" pattern="[A-Za-z\s]+"  name="country">

            <br>
            <input type="submit" id="submit-button" value="DONE" class="btn btn-primary btn-m"></input>
            
        </form>
    </div>
    <!-- Hidden Modal end -->

   
    <!-- Modal for view start-->
    <div class="container1" id="form">
        <form class="edit-form" id="viewModal" method="POST" enctype="multipart/form-data" onsubmit="saveData(event)">
            <button id="close-button" onclick="closeViewModal()">X</button>
            <input type="hidden" name="Id" id="Id" value="">
            <label for="file-input">
                <img id="image-preview" src="default-avatar.png" alt="">
            </label>
            <!-- <input id="file-input" type="file" accept="image/*" onchange="loadFile(event)" name="contact_image"> -->
            <br>
            <label>Enter Name</label><br>
            <input type="text"  placeholder="First Name" name="fname" pattern="[A-Za-z]+">
            <input type="text" placeholder="Middle Name" pattern="[A-Za-z]+" name="mname">
            <input type="text" placeholder="Last Name" name="lname" pattern="[A-Za-z]+">
            <br>
            <label>Add Email</label><br>
            <input type="email" placeholder="Email" name="email">
            <br>
            <label>Add Mobile number</label><br>
            <select id="countryCode" name="cchome">
                <option value="+91">India (+91)</option>
                <option value="+1">United States (+1)</option>
                <option value="+44">United Kingdom (+44)</option>
                <option value="+61">Australia (+61)</option>
                <option value="+81">Japan (+81)</option>
                <option value="+49">Germany (+49)</option>
                <option value="+33">France (+33)</option>
                <option value="+86">China (+86)</option>
                <option value="+55">Brazil (+55)</option>
                <option value="+7">Russia (+7)</option>
                <option value="+34">Spain (+34)</option>
                <option value="+39">Italy (+39)</option>
                <option value="+52">Mexico (+52)</option>
                <option value="+27">South Africa (+27)</option>
                <option value="+234">Nigeria (+234)</option>
                <option value="+20">Egypt (+20)</option>
                <option value="+31">Netherlands (+31)</option>
                <option value="+62">Indonesia (+62)</option>
                <option value="+64">New Zealand (+64)</option>
                <option value="+65">Singapore (+65)</option>
                <!-- Add more country codes as needed -->
            </select>
            <input type="text" placeholder="Home +" name="contact_home" pattern="\d{10}" ><br>
            <select id="countryCode" name="ccwork">
                <option value="+91">India (+91)</option>
                <option value="+1">United States (+1)</option>
                <option value="+44">United Kingdom (+44)</option>
                <option value="+61">Australia (+61)</option>
                <option value="+81">Japan (+81)</option>
                <option value="+49">Germany (+49)</option>
                <option value="+33">France (+33)</option>
                <option value="+86">China (+86)</option>
                <option value="+55">Brazil (+55)</option>
                <option value="+7">Russia (+7)</option>
                <option value="+34">Spain (+34)</option>
                <option value="+39">Italy (+39)</option>
                <option value="+52">Mexico (+52)</option>
                <option value="+27">South Africa (+27)</option>
                <option value="+234">Nigeria (+234)</option>
                <option value="+20">Egypt (+20)</option>
                <option value="+31">Netherlands (+31)</option>
                <option value="+62">Indonesia (+62)</option>
                <option value="+64">New Zealand (+64)</option>
                <option value="+65">Singapore (+65)</option>
                <!-- Add more country codes as needed -->
            </select>
            <input type="text" placeholder="Work +" pattern="\d{10}" name="contact_work">
            <br>
            <label>Add Address</label><br>
            <input type="text" placeholder="Address Line 1"   name="addl1">
            <input type="text" placeholder="Address Line 2"   name="addl2">
            <input type="text" placeholder="State"   name="state">
            <input type="text" placeholder="Country"   name="country">

            <br>
            
            <input type="submit" id="save-button" value="Save" class="btn btn-primary btn-m">
            <input type="submit" id="delete-button" value="Delete" class="btn btn-danger btn-m">
    </form>
            
     
    </div>

    <!-- Modal for view end -->

    
    <script src="script.js"></script>
</body>
</html>
