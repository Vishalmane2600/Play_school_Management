<!DOCTYPE html>
<html>
    <head>
        <title>Registration Page</title>
        <link rel="stylesheet" type="text/css" href="" />
        <style>
         table, th, td {
            border: 1px solid blak;
         }
      </style>
    </head>
<center>
  <body>
        <div class="container">
            <div class="row col-md-6 col-md-offset-3">
                <div class="panel panel-primary">
                    <div class="panel-heading text-center">
                       <marquee><h2>Candidate New Registration for academics year 2022-23 <h2> </marquee> 


                    </div>
                    <div class="panel-body">
                        <form action="connect.php" method="post">
                            <table>
                                <tr>
                                    <td>
                                        <div class="form-group">
                                            <label for="firstName">First Name</label></td>
                                        <td><input  type="text" class="form-control" id="firstName" name="firstName" placeholder="Enter your frist name" required/></td>
                                </div>
                                
                                 </tr>
                                <tr>
                                    <td>
                                        <div class="form-group">
                                            <label for="lastName">Last Name</label></td>
                                        <td> <input
                                                type="text"
                                                class="form-control"
                                                id="lastName"
                                                name="lastName"placeholder="Enter your last name" required /></td>
                                        </div>
                                   
                                </tr>

                                <tr>
                                    <td>
                                        <div class="form-group">
                                            <label for="email">Email</label></td>
                                        <td> <input
                                                type="text"
                                                class="form-control"
                                                id="email"
                                                name="email"placeholder="Enter your email" required
                                                /></td>
                                        </div>
                                    
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-group">
                                            <label for="password">Password</label></td>
                                        <td><input
                                                type="password"
                                                class="form-control"
                                                id="password"
                                                name="password"placeholder="Enter your password" required
                                                /></td>
                                        </div>
                                   
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-group">
                                            <label for="number">Phone Number</label></td>
                                        <td><input
                                                type="number"
                                                class="form-control"
                                                id="number"
                                                name="number"placeholder="Enter your contact number" required
                                                /></td>
                                        </div>
                                    
                                </tr>

                                <tr>
                                    <td>
                                        <input type="submit" class="btn btn-primary" />

                                    </td>
                                </tr>
                            </table>
                        </form>
                    </div>

                </div>
            </div>
        </div>

    </div>
</body>
</center>
</html>