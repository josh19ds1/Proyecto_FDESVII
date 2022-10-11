<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="public/css/style.css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>
    
    <?php include("view/secciones1/header.php") ?>   

    <div class="container">		
        <!-- Gmail Header Starts here -->
        <div class="row">
            <div class="col-xs-12 col-sm-3 col-md-2 col-lg-2"> 
                <div class="btn-group" role="group">
                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                          Gmail
                          <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Mail</a></li>
                          <li><a href="#">Contacts</a></li>
                          <li><a href="#">Tasks</a></li>
                    </ul>
                  </div>
            </div>
            <div class="col-xs-12 col-sm-9 col-md-10 col-lg-10"> 
                <div class="pull-left">		
                    <div class="btn-group">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                              <input type="checkbox"/> <span class="caret"></span>
                          </button>
                          <ul class="dropdown-menu" role="menu">
                               <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                          </ul>
                    </div>
                    <button type="button" class="btn btn-default">
                        <i class="fa fa-refresh"></i>
                    </button>
                    
                    <div class="btn-group">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                            More <span class="caret"></span>
                          </button>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Mark all as read</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Select messages to see more actions</a></li>
                          </ul>
                    </div>
                </div>
                <div class="pull-right">
                    <span>1-13 of 13</span>
                    <div class="btn-group" role="group" aria-label="...">
                      <button type="button" class="btn btn-default"> <i class='fa fa-angle-left'></i> </button>
                      <button type="button" class="btn btn-default"> <i class='fa fa-angle-right'></i> </button>
                    </div>
                    
                    <div class="btn-group">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                            <i class="fa fa-gear"></i> <span class="caret"></span>
                          </button>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Comfortable</a></li>
                            <li><a href="#">Cozy</a></li>
                            <li><a href="#">Compact</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Configure Inbox</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Settings</a></li>
                            <li><a href="#">Themes</a></li>
                            <li><a href="#">Help</a></li>
                          </ul>
                    </div>
                </div>	
            </div>
        </div>
        <!-- Gmail Header Starts here -->
        <hr>
        <div class="row">
            <div class="col-xs-12 col-sm-3 col-md-2 col-lg-2"> 
                <p>
                <button class="btn btn-danger" type="button">
                  Compose
                </button>
                </p>
                <hr/>
                <p>
                <button class="btn btn-success" type="button">
                  Inbox <span class="badge">4</span>
                </button>
                </p><p>
                <button class="btn btn-info" type="button">
                  Starred 
                </button>
                </p>
                <p>
                    <button class="btn btn-warning" type="button">
                          Important 
                    </button>
                </p>
                <p>
                    <button class="btn btn-danger" type="button">
                          Chats 
                    </button>
                </p>
                <p>
                    <button class="btn btn-info" type="button">
                          Sent Mail 
                    </button>
                </p>
                <p>
                    <button class="btn btn-primary" type="button">
                      Drafts <span class="badge">10</span>
                    </button>
                </p>
            </div>
            <div class="col-xs-12 col-sm-9 col-md-10 col-lg-10"> 
                <div role="tabpanel">
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab"> <i class="fa fa-hdd-o"></i> &nbsp;  Primary</a></li>
                        <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab"> <i class="fa fa-users"></i> &nbsp; Social</a></li>
                        <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab"> <i class="fa fa-exclamation-circle"></i> &nbsp; Updates</a></li>
                        <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">+</a></li>
                      </ul>
                
                      <!-- Tab panes -->
                      <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="home">
                            &nbsp;&nbsp;&nbsp;
                            
                            <table class="table table-hover">
                                <tbody>
                                    <tr>
                                          <td scope="row"><input type="checkbox"/></td>
                                          <td><i class="fa fa-star"></i></td>
                                          <td>Smart Tutorials Download Link</td>
                                          <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</td>
                                        <td> <i class="fa fa-file-archive-o"> </i> </td>
                                        <td>8:06am</td>
                                    </tr>
                                    <tr>
                                          <td scope="row"><input type="checkbox"/></td>
                                          <td><i class="fa fa-star"></i></td>
                                          <td>Smart Tutorials Download Link</td>
                                          <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</td>
                                        <td> <i class="fa fa-file-archive-o"> </i> </td>
                                        <td> 8:06am </td>
                                    </tr>
                                    <tr>
                                          <td scope="row"><input type="checkbox"/></td>
                                          <td><i class="fa fa-star"></i></td>
                                          <td>Smart Tutorials Download Link</td>
                                          <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</td>
                                        <td> <i class="fa fa-file-archive-o"> </i> </td>
                                        <td>Jan 1</td>
                                    </tr>
                                    <tr>
                                          <td scope="row"><input type="checkbox"/></td>
                                          <td><i class="fa fa-star"></i></td>
                                          <td>Smart Tutorials Download Link</td>
                                          <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</td>
                                        <td> <i class="fa fa-file-archive-o"> </i> </td>
                                        <td> Jan 2</td>
                                    </tr>
                              </tbody>
                            </table>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="profile">
                            &nbsp;&nbsp;&nbsp;
                            <table class="table table-hover">
                                <tbody>
                                    <tr>
                                          <td scope="row"><input type="checkbox"/></td>
                                          <td><i class="fa fa-star"></i></td>
                                          <td>Muni tagged You in Facebook</td>
                                          <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</td>
                                        <td> <i class="fa fa-file-archive-o"> </i> </td>
                                        <td>8:06am</td>
                                    </tr>
                                    <tr>
                                          <td scope="row"><input type="checkbox"/></td>
                                          <td><i class="fa fa-star"></i></td>
                                          <td>Smart Tutorials Shared Link On Google Plus</td>
                                          <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</td>
                                        <td> <i class="fa fa-file-archive-o"> </i> </td>
                                        <td>8:06am</td>
                                    </tr>
                                    <tr>
                                          <td scope="row"><input type="checkbox"/></td>
                                          <td><i class="fa fa-star"></i></td>
                                          <td>Smart Tutorials New Post on Twitter</td>
                                          <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</td>
                                        <td> <i class="fa fa-file-archive-o"> </i> </td>
                                        <td>Jan 1</td>
                                    </tr>
                              </tbody>
                            </table>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="messages">
                            &nbsp;&nbsp;&nbsp;
                            <table class="table table-hover">
                                <tbody>
                                    <tr>
                                          <td scope="row"><input type="checkbox"/></td>
                                          <td><i class="fa fa-star"></i></td>
                                          <td>New Updates From SmartTutorils</td>
                                          <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</td>
                                        <td> <i class="fa fa-file-archive-o"> </i> </td>
                                        <td>8:06am</td>
                                    </tr>
                                    <tr>
                                          <td scope="row"><input type="checkbox"/></td>
                                          <td><i class="fa fa-star"></i></td>
                                          <td>Smart Tutorials Shared Link On Google Plus</td>
                                          <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</td>
                                        <td> <i class="fa fa-file-archive-o"> </i> </td>
                                        <td>8:06am</td>
                                    </tr>
                                    
                              </tbody>
                            </table>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="settings">
                        </div>
                      </div>
                </div>
                
                
                
                
            </div>
        </div>
    </div>

   
</body>
</html>