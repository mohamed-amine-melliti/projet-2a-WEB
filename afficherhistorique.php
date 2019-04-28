<!doctype html>
<html class="fixed">
  <head>

    <!-- Basic -->
    <meta charset="UTF-8">

    <title>Advanced Tables | B&B-Admin</title>
    <meta name="keywords" content="HTML5 Admin Template" />
    <meta name="description" content="Porto Admin - Responsive HTML5 Template">
    <meta name="author" content="okler.net">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <!-- Web Fonts  -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.css" />
    <link rel="stylesheet" href="assets/vendor/magnific-popup/magnific-popup.css" />
    <link rel="stylesheet" href="assets/vendor/bootstrap-datepicker/css/datepicker3.css" />

    <!-- Specific Page Vendor CSS -->
    <link rel="stylesheet" href="assets/vendor/select2/select2.css" />
    <link rel="stylesheet" href="assets/vendor/jquery-datatables-bs3/assets/css/datatables.css" />

    <!-- Theme CSS -->
    <link rel="stylesheet" href="assets/stylesheets/theme.css" />

    <!-- Skin CSS -->
    <link rel="stylesheet" href="assets/stylesheets/skins/default.css" />

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="assets/stylesheets/theme-custom.css">

    <!-- Head Libs -->
    <script src="assets/vendor/modernizr/modernizr.js"></script>

  </head>
  <body>
    <section class="body">

      <!-- start: header -->
      <header class="header">
        <div class="logo-container">
          <a href="../" class="logo">
            <img src="assets/images/logo.png" height="35" alt="Porto Admin" />
          </a>
          <div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
            <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
          </div>
        </div>
      
        <!-- start: search & user box -->
        <div class="header-right">
      
          <form action="pages-search-results.html" class="search nav-form">
            <div class="input-group input-search">
              <input type="text" class="form-control" name="q" id="q" placeholder="Search...">
              <span class="input-group-btn">
                <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
      
          <span class="separator"></span>
      
          <ul class="notifications">
            <li>
              <a href="#" class="dropdown-toggle notification-icon" data-toggle="dropdown">
                <i class="fa fa-tasks"></i>
                <span class="badge">3</span>
              </a>
      
              <div class="dropdown-menu notification-menu large">
                <div class="notification-title">
                  <span class="pull-right label label-default">3</span>
                  Tasks
                </div>
      
                <div class="content">
                  <ul>
                    <li>
                      <p class="clearfix mb-xs">
                        <span class="message pull-left">Generating Sales Report</span>
                        <span class="message pull-right text-dark">60%</span>
                      </p>
                      <div class="progress progress-xs light">
                        <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                      </div>
                    </li>
      
                    <li>
                      <p class="clearfix mb-xs">
                        <span class="message pull-left">Importing Contacts</span>
                        <span class="message pull-right text-dark">98%</span>
                      </p>
                      <div class="progress progress-xs light">
                        <div class="progress-bar" role="progressbar" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100" style="width: 98%;"></div>
                      </div>
                    </li>
      
                    <li>
                      <p class="clearfix mb-xs">
                        <span class="message pull-left">Uploading something big</span>
                        <span class="message pull-right text-dark">33%</span>
                      </p>
                      <div class="progress progress-xs light mb-xs">
                        <div class="progress-bar" role="progressbar" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100" style="width: 33%;"></div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </li>
            <li>
              <a href="#" class="dropdown-toggle notification-icon" data-toggle="dropdown">
                <i class="fa fa-envelope"></i>
                <span class="badge">4</span>
              </a>
      
              <div class="dropdown-menu notification-menu">
                <div class="notification-title">
                  <span class="pull-right label label-default">230</span>
                  Messages
                </div>
      
                <div class="content">
                  <ul>
                    <li>
                      <a href="#" class="clearfix">
                        <figure class="image">
                          <img src="assets/images/!sample-user.jpg" alt="Joseph Doe Junior" class="img-circle" />
                        </figure>
                        <span class="title">Joseph Doe</span>
                        <span class="message">Lorem ipsum dolor sit.</span>
                      </a>
                    </li>
                    <li>
                      <a href="#" class="clearfix">
                        <figure class="image">
                          <img src="assets/images/!sample-user.jpg" alt="Joseph Junior" class="img-circle" />
                        </figure>
                        <span class="title">Joseph Junior</span>
                        <span class="message truncate">Truncated message. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet lacinia orci. Proin vestibulum eget risus non luctus. Nunc cursus lacinia lacinia. Nulla molestie malesuada est ac tincidunt. Quisque eget convallis diam, nec venenatis risus. Vestibulum blandit faucibus est et malesuada. Sed interdum cursus dui nec venenatis. Pellentesque non nisi lobortis, rutrum eros ut, convallis nisi. Sed tellus turpis, dignissim sit amet tristique quis, pretium id est. Sed aliquam diam diam, sit amet faucibus tellus ultricies eu. Aliquam lacinia nibh a metus bibendum, eu commodo eros commodo. Sed commodo molestie elit, a molestie lacus porttitor id. Donec facilisis varius sapien, ac fringilla velit porttitor et. Nam tincidunt gravida dui, sed pharetra odio pharetra nec. Duis consectetur venenatis pharetra. Vestibulum egestas nisi quis elementum elementum.</span>
                      </a>
                    </li>
                    <li>
                      <a href="#" class="clearfix">
                        <figure class="image">
                          <img src="assets/images/!sample-user.jpg" alt="Joe Junior" class="img-circle" />
                        </figure>
                        <span class="title">Joe Junior</span>
                        <span class="message">Lorem ipsum dolor sit.</span>
                      </a>
                    </li>
                    <li>
                      <a href="#" class="clearfix">
                        <figure class="image">
                          <img src="assets/images/!sample-user.jpg" alt="Joseph Junior" class="img-circle" />
                        </figure>
                        <span class="title">Joseph Junior</span>
                        <span class="message">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet lacinia orci. Proin vestibulum eget risus non luctus. Nunc cursus lacinia lacinia. Nulla molestie malesuada est ac tincidunt. Quisque eget convallis diam.</span>
                      </a>
                    </li>
                  </ul>
      
                  <hr />
      
                  <div class="text-right">
                    <a href="#" class="view-more">View All</a>
                  </div>
                </div>
              </div>
            </li>
            <li>
              <a href="#" class="dropdown-toggle notification-icon" data-toggle="dropdown">
                <i class="fa fa-bell"></i>
                <span class="badge">3</span>
              </a>
      
              <div class="dropdown-menu notification-menu">
                <div class="notification-title">
                  <span class="pull-right label label-default">3</span>
                  Alerts
                </div>
      
                <div class="content">
                  <ul>
                    <li>
                      <a href="#" class="clearfix">
                        <div class="image">
                          <i class="fa fa-thumbs-down bg-danger"></i>
                        </div>
                        <span class="title">Server is Down!</span>
                        <span class="message">Just now</span>
                      </a>
                    </li>
                    <li>
                      <a href="#" class="clearfix">
                        <div class="image">
                          <i class="fa fa-lock bg-warning"></i>
                        </div>
                        <span class="title">User Locked</span>
                        <span class="message">15 minutes ago</span>
                      </a>
                    </li>
                    <li>
                      <a href="#" class="clearfix">
                        <div class="image">
                          <i class="fa fa-signal bg-success"></i>
                        </div>
                        <span class="title">Connection Restaured</span>
                        <span class="message">10/10/2014</span>
                      </a>
                    </li>
                  </ul>
      
                  <hr />
      
                  <div class="text-right">
                    <a href="#" class="view-more">View All</a>
                  </div>
                </div>
              </div>
            </li>
          </ul>
      
          <span class="separator"></span>
      
          <div id="userbox" class="userbox">
            <a href="#" data-toggle="dropdown">
              <figure class="profile-picture">
                <img src="assets/images/!logged-user.jpg" alt="Joseph Doe" class="img-circle" data-lock-picture="assets/images/!logged-user.jpg" />
              </figure>
              <div class="profile-info" data-lock-name="John Doe" data-lock-email="johndoe@okler.com">
                <span class="name">Wajdi Khlifa</span>
                <span class="role">administrator</span>
              </div>
      
              <i class="fa custom-caret"></i>
            </a>
      
            <div class="dropdown-menu">
              <ul class="list-unstyled">
                <li class="divider"></li>
                <li>
                  <a role="menuitem" tabindex="-1" href="pages-user-profile.html"><i class="fa fa-user"></i> My Profile</a>
                </li>
                <li>
                  <a role="menuitem" tabindex="-1" href="#" data-lock-screen="true"><i class="fa fa-lock"></i> Lock Screen</a>
                </li>
                <li>
                  <a role="menuitem" tabindex="-1" href="pages-signin.html"><i class="fa fa-power-off"></i> Logout</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <!-- end: search & user box -->
      </header>
      <!-- end: header -->

      <div class="inner-wrapper">
        <!-- start: sidebar -->
        <aside id="sidebar-left" class="sidebar-left">
        
          <div class="sidebar-header">
            <div class="sidebar-title">
              Navigation
            </div>
            <div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
              <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
            </div>
          </div>
        
          <div class="nano">
            <div class="nano-content">
              <nav id="menu" class="nav-main" role="navigation">
                <ul class="nav nav-main">
                  <li>
                    <a href="index.html">
                      <i class="fa fa-home" aria-hidden="true"></i>
                      <span>Dashboard</span>
                    </a>
                  </li>
                  <li>
                    <a href="mailbox-folder.html">
                      <span class="pull-right label label-primary">182</span>
                      <i class="fa fa-envelope" aria-hidden="true"></i>
                      <span>Mailbox</span>
                    </a>
                  </li>




                  <li class="nav-parent">
                    <a>
                      <i class="fa fa-map-marker" aria-hidden="true"></i>
                      <span>Maps</span>
                    </a>
                    <ul class="nav nav-children">
                      <li>
                        <a href="maps-google-maps.html">
                           Basic
                        </a>
                      </li>

                    </ul>
                  </li>
                  <li class="nav-parent">
                    <a>
                      <i class="fa fa-columns" aria-hidden="true"></i>
                      <span>Gestion des clients</span>
                    </a>
                    <ul class="nav nav-children">
                      <li>
                        <a href="forms-validation client.html">
                           réponse à des réclamations
                        </a>
                      </li>
                      <li class="nav-active">
                        <a href="tables-advanced clients.html">
                           afficher liste des clients
                        </a>
                      </li>
                      <li>
                        <a href="tables-editable client.html">
                           modifier et supprimer
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-parent">
                    <a>
                      <i class="fa fa-columns" aria-hidden="true"></i>
                      <span>Gestion des produits</span>
                    </a>
                    <ul class="nav nav-children">
                      <li>
                        <a href="tables-advanced produits.html">
                           afficher liste des produits
                        </a>
                      </li>
                      <li>
                        <a href="forms-advanced produits.html">
                            ajouter 
                        </a>
                      </li>
                      <li>
                        <a href="tables-editable produits.html">
                           modifier et supprimer
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-parent">
                    <a>
                      <i class="fa fa-columns" aria-hidden="true"></i>
                      <span>Gestion des factures</span>
                    </a>
                    <ul class="nav nav-children">
                      <li>
                        <a href="tables-advanced factures.html">
                          afficher liste des factures 
                        </a>
                      </li>
                      <li>
                        <a href="forms-advanced factures.html">
                            ajouter  
                        </a>
                      </li>
                      <li>
                        <a href="tables-editable factures.html">
                           modifier et supprimer
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-parent nav-expanded nav-active">
                    <a>
                      <i class="fa fa-columns" aria-hidden="true"></i>
                      <span>Gestion des commandes</span>
                    </a>
                    <ul class="nav nav-children">
                      <li  class="nav-active">
                        <a href="tables-advanced  commandes.html">
                           afficher liste des commandes
                        </a>
                      </li>
                      <li>
                        <a href="forms-advanced commandes.html">
                            ajouter  
                        </a>
                      </li>
                      <li>
                        <a href="tables-editable commandes.html">
                           modifier et supprimer
                        </a>
                      </li>
                    </ul>
                  </li>
                    <li class="nav-parent">
                    <a>
                      <i class="fa fa-columns" aria-hidden="true"></i>
                      <span>Gestion De Communauté  </span>
                    </a>
                    <ul class="nav nav-children">
                      <li>
                        <a href="tables-advanced  Communauté.html">
                           afficher liste des événements
                        </a>
                      </li>
                      <li>
                        <a href="forms-advanced Communauté .html">
                           ajouter 
                        </a>
                      </li>
                      <li>
                        <a href="tables-editable Communauté .html">
                           modifier et supprimer
                        </a>
                      </li>
                        <li>
                        <a href="pages-calendar.html">
                           calendrier
                        </a>
                      </li>

                    </ul>
                  </li>
                  <li class="nav-parent">
                    <a>
                      <i class="fa fa-columns" aria-hidden="true"></i>
                      <span>Gestion des promotions et Publictés</span>
                    </a>
                    <ul class="nav nav-children">
                      <li>
                        <a href="tables-advanced promotions et Publictés.html">
                           afficher liste de promotions
                        </a>
                      </li>
                      <li>
                        <a href="forms-advanced promotions et Publictés.html">
                          ajouter  
                        </a>
                      </li>
                      <li>
                        <a href="tables-editable promotions et Publictés.html">
                           modifier et supprimer
                        </a>
                      </li>
                    </ul>
                  </li>
            </div>
        
          </div>
        
        </aside>
        <!-- end: sidebar -->

        <section role="main" class="content-body">
          <header class="page-header">
            <h2>Advanced Tables</h2>
          
            <div class="right-wrapper pull-right">
              <ol class="breadcrumbs">
                <li>
                  <a href="index.html">
                    <i class="fa fa-home"></i>
                  </a>
                </li>
                <li><span>Tables</span></li>
                <li><span>Advanced</span></li>
              </ol>
          
              <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
            </div>
          </header>

          <!-- start: page -->
            <section class="panel">
              <header class="panel-heading">
                <div class="panel-actions">
                  <a href="#" class="fa fa-caret-down"></a>
                  <a href="#" class="fa fa-times"></a>
                </div>
            
                <h2 class="panel-title">Commandes</h2>
              </header>
              <div class="panel-body">
                <?PHP
include "../../core/commandec.php";
$db = config::getConnexion();
$commande1C=new commandeC();

$listecommandes=$commande1C->afficherhistorique();

//var_dump($listecommandes->fetchAll());
?>
                <table class="table table-bordered table-striped mb-none" id="datatable-default">
                  <thead>
                    <tr>
<th onclick="sortTable(0)">idCmd</th>
<th>dateCmd</th>
<th>prixtot</th>
<th>date_prev</th>
<th>etatCmd </th>
<th>supprimer</th>
<th>modifier</th>
</tr>
                  </thead>
                  <tbody>
                    <script>
function sortTable(n) {
  var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
  table = document.getElementById("myTable2");
  switching = true;
  // Set the sorting direction to ascending:
  dir = "asc"; 
  /* Make a loop that will continue until
  no switching has been done: */
  while (switching) {
    // Start by saying: no switching is done:
    switching = false;
    rows = table.rows;
    /* Loop through all table rows (except the
    first, which contains table headers): */
    for (i = 1; i < (rows.length - 1); i++) {
      // Start by saying there should be no switching:
      shouldSwitch = false;
      /* Get the two elements you want to compare,
      one from current row and one from the next: */
      x = rows[i].getElementsByTagName("TD")[n];
      y = rows[i + 1].getElementsByTagName("TD")[n];
      /* Check if the two rows should switch place,
      based on the direction, asc or desc: */
      if (dir == "asc") {
        if (Number(x.innerHTML) > Number(y.innerHTML)) {
          // If so, mark as a switch and break the loop:
          shouldSwitch = true;
          break;
        }
      } else if (dir == "desc") {
        if (Number(x.innerHTML) < Number(y.innerHTML)) {
          // If so, mark as a switch and break the loop:
          shouldSwitch = true;
          break;
        }
      }
    }
    if (shouldSwitch) {
      /* If a switch has been marked, make the switch
      and mark that a switch has been done: */
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
      // Each time a switch is done, increase this count by 1:
      switchcount ++; 
    } else {
      /* If no switching has been done AND the direction is "asc",
      set the direction to "desc" and run the while loop again. */
      if (switchcount == 0 && dir == "asc") {
        dir = "desc";
        switching = true;
      }
    }
  }
}
</script>
                    <?PHP 
foreach($listecommandes as $row){
  ?>
  
    <tr>
  <td><?PHP echo $row['idCmd']; ?></td>
  <td><?PHP echo $row['dateCmd']; ?></td>
  <td><?PHP echo $row['prixtot']; ?></td>
  <td><?PHP echo $row['date_prev']; ?></td>
  <td><?PHP echo $row['etatCmd']; ?></td>
  <td><form method="POST" action="supprimercommande.php">
  <input type="submit" name="supprimer" value="supprimer">
  <input type="hidden" value="<?PHP echo $row['idCmd']; ?>" name="idCmd">
  <input type="hidden" value="<?PHP echo $row['dateCmd']; ?>" name="dateCmd">
  <input type="hidden" value="<?PHP echo $row['prixtot']; ?>" name="prixtot">
  <input type="hidden" value="<?PHP echo $row['date_prev']; ?>" name="date_prev">
  <input type="hidden" value="<?PHP echo $row['etatCmd']; ?>" name="etatCmd">

  </form>
  </td>
  <td><a href="modifier.php?idCmd=<?PHP echo $row['idCmd']; ?>">
  Modifier</a></td>
  </tr>

  <?PHP

}
?>

                  
                  </tbody>
                </table>
            



  


  


              </div>
            </section>
            

          <!-- end: page -->
        </section>
      </div>

      <aside id="sidebar-right" class="sidebar-right">
        <div class="nano">
          <div class="nano-content">
            <a href="#" class="mobile-close visible-xs">
              Collapse <i class="fa fa-chevron-right"></i>
            </a>
      
            <div class="sidebar-right-wrapper">
      
              <div class="sidebar-widget widget-calendar">
                <h6>Upcoming Tasks</h6>
                <div data-plugin-datepicker data-plugin-skin="dark" ></div>
      
                <ul>
                  <li>
                    <time datetime="2014-04-19T00:00+00:00">04/19/2014</time>
                    <span>Company Meeting</span>
                  </li>
                </ul>
              </div>
      
              <div class="sidebar-widget widget-friends">
                <h6>Friends</h6>
                <ul>
                  <li class="status-online">
                    <figure class="profile-picture">
                      <img src="assets/images/!sample-user.jpg" alt="Joseph Doe" class="img-circle">
                    </figure>
                    <div class="profile-info">
                      <span class="name">Joseph Doe Junior</span>
                      <span class="title">Hey, how are you?</span>
                    </div>
                  </li>
                  <li class="status-online">
                    <figure class="profile-picture">
                      <img src="assets/images/!sample-user.jpg" alt="Joseph Doe" class="img-circle">
                    </figure>
                    <div class="profile-info">
                      <span class="name">Joseph Doe Junior</span>
                      <span class="title">Hey, how are you?</span>
                    </div>
                  </li>
                  <li class="status-offline">
                    <figure class="profile-picture">
                      <img src="assets/images/!sample-user.jpg" alt="Joseph Doe" class="img-circle">
                    </figure>
                    <div class="profile-info">
                      <span class="name">Joseph Doe Junior</span>
                      <span class="title">Hey, how are you?</span>
                    </div>
                  </li>
                  <li class="status-offline">
                    <figure class="profile-picture">
                      <img src="assets/images/!sample-user.jpg" alt="Joseph Doe" class="img-circle">
                    </figure>
                    <div class="profile-info">
                      <span class="name">Joseph Doe Junior</span>
                      <span class="title">Hey, how are you?</span>
                    </div>
                  </li>
                </ul>
              </div>
      
            </div>
          </div>
        </div>
      </aside>
    </section>

    <!-- Vendor -->
    <script src="assets/vendor/jquery/jquery.js"></script>
    <script src="assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.js"></script>
    <script src="assets/vendor/nanoscroller/nanoscroller.js"></script>
    <script src="assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
    <script src="assets/vendor/magnific-popup/magnific-popup.js"></script>
    <script src="assets/vendor/jquery-placeholder/jquery.placeholder.js"></script>
    
    <!-- Specific Page Vendor -->
    <script src="assets/vendor/select2/select2.js"></script>
    <script src="assets/vendor/jquery-datatables/media/js/jquery.dataTables.js"></script>
    <script src="assets/vendor/jquery-datatables/extras/TableTools/js/dataTables.tableTools.min.js"></script>
    <script src="assets/vendor/jquery-datatables-bs3/assets/js/datatables.js"></script>
    
    <!-- Theme Base, Components and Settings -->
    <script src="assets/javascripts/theme.js"></script>
    
    <!-- Theme Custom -->
    <script src="assets/javascripts/theme.custom.js"></script>
    
    <!-- Theme Initialization Files -->
    <script src="assets/javascripts/theme.init.js"></script>


    <!-- Examples -->
    <script src="assets/javascripts/tables/examples.datatables.default.js"></script>
    <script src="assets/javascripts/tables/examples.datatables.row.with.details.js"></script>
    <script src="assets/javascripts/tables/examples.datatables.tabletools.js"></script>
    <script type="text/javascript">

    let recherche=document.getElementById("recherche");

        recherche.addEventListener("keydown",function (e)

        {

            if (e.keyCode==13)

                document.location="afficherCommande1.php?r="+recherche.value;

            e.stopPropagation(); 

        });

    </script>
  </body>
</html>





