  <div id="myWP"></div>
  <!--Footer-->
  <footer class="page-footer text-center text-md-left blue-grey lighten-5 pt-0">

    <div style="background-color: #5991fb;">
      <div class="container">
        <!--Grid row-->
        <div class="row py-4 d-flex align-items-center">

          <!--Grid column-->
          <div class="col-12 col-md-5 text-left mb-md-0">
            <h6 class="mb-0 white-text text-center text-md-left"><strong>Get connected with us on social
                networks!</strong></h6>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-12 col-md-7 text-center text-md-right">
            <!--Facebook-->
            <a class="p-2 m-2 fa-lg fb-ic ml-0"><i class="fab fa-facebook-f white-text mr-lg-4"> </i></a>
            <!--Twitter-->
            <a class="p-2 m-2 fa-lg tw-ic"><i class="fab fa-twitter white-text mr-lg-4"> </i></a>
            <!--Google +-->
            <a class="p-2 m-2 fa-lg gplus-ic"><i class="fab fa-google-plus-g white-text mr-lg-4"> </i></a>
            <!--Linkedin-->
            <a class="p-2 m-2 fa-lg li-ic"><i class="fab fa-linkedin-in white-text mr-lg-4"> </i></a>
            <!--Instagram-->
            <a class="p-2 m-2 fa-lg ins-ic"><i class="fab fa-instagram white-text mr-lg-4"> </i></a>
          </div>
          <!--Grid column-->

        </div>
        <!--Grid row-->
      </div>
    </div>

    <!--Footer Links-->
    <div class="container mt-5 mb-4 text-center text-md-left">
      <div class="row mt-3">

        <!--First column-->
        <div class="col-md-3 col-lg-4 col-xl-3 mb-4 dark-grey-text">
          <h6 class="text-uppercase font-weight-bold"><strong>Company name</strong></h6>
          <hr class="blue mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
          <p>Here you can use rows and columns here to organize your footer content. Lorem ipsum dolor sit amet,
            consectetur
            adipisicing elit.</p>
        </div>
        <!--/.First column-->

        <!--Second column-->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4 dark-grey-text">
          <h6 class="text-uppercase font-weight-bold"><strong>Products</strong></h6>
          <hr class="blue mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
          <p><a href="#!" class="dark-grey-text">MDBootstrap</a></p>
          <p><a href="#!" class="dark-grey-text">MDWordPress</a></p>
          <p><a href="#!" class="dark-grey-text">BrandFlow</a></p>
          <p><a href="#!" class="dark-grey-text">Bootstrap Angular</a></p>
        </div>
        <!--/.Second column-->

        <!--Third column-->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4 dark-grey-text">
          <h6 class="text-uppercase font-weight-bold"><strong>Useful links</strong></h6>
          <hr class="blue mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
          <p><a href="#!" class="dark-grey-text">Your Account</a></p>
          <p><a href="#!" class="dark-grey-text">Become an Affiliate</a></p>
          <p><a href="#!" class="dark-grey-text">Shipping Rates</a></p>
          <p><a href="#!" class="dark-grey-text">Help</a></p>
        </div>
        <!--/.Third column-->

        <!--Fourth column-->
        <div class="col-md-4 col-lg-3 col-xl-3 dark-grey-text">
          <h6 class="text-uppercase font-weight-bold"><strong>Contact</strong></h6>
          <hr class="blue mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
          <p><i class="fas fa-home mr-3"></i> New York, NY 10012, US</p>
          <p><i class="fas fa-envelope mr-3"></i> info@example.com</p>
          <p><i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
          <p><i class="fas fa-print mr-3"></i> + 01 234 567 89</p>
        </div>
        <!--/.Fourth column-->

      </div>
    </div>
    <!--/.Footer Links-->

    <!-- Copyright-->
    <div class="footer-copyright py-3 text-center">
      <div class="container-fluid">
        © 2019 Copyright: <a href="https://mdbootstrap.com/education/bootstrap/" target="_blank"> MDBootstrap.com </a>
      </div>
    </div>
    <!--/.Copyright -->

  </footer>
  <!--/.Footer-->


  <!-- SCRIPTS -->

  <!-- JQuery -->
  <script type="text/javascript" src="vendor/mdb/ldp/js/jquery-3.4.1.min.js"></script>

  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="vendor/mdb/ldp/js/popper.min.js"></script>

  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="vendor/mdb/ldp/js/bootstrap.min.js"></script>

  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="vendor/mdb/ldp/js/mdb.min.js"></script>

  <script src="vendor/whatsapp/floating-wpp.js"></script>
  <script>
    //Animation init
    new WOW().init();
    //Modal
    $('#myModal').on('shown.bs.modal', function () {
      $('#myInput').focus()
    })
    // Material Select Initialization
    $(document).ready(function () {
      $('.mdb-select').material_select();
    });

    $('#myWP').floatingWhatsApp({
      phone: '{{ setting('whatsapp.phone') }}',
      popupMessage: '{{ setting('whatsapp.popupMessage') }}',
      message: '{{ setting('whatsapp.message') }}',
      showPopup: true,
      showOnIE: true,
      headerTitle: '{{ setting('whatsapp.headerTitle') }}',
      headerColor: '{{ setting('whatsapp.color') }}',
      backgroundColor: '{{ setting('whatsapp.color') }}',
      buttonImage: '<img src="{{ asset('storage/'.setting('whatsapp.buttonImage') ) }}" />',
      position: '{{ setting('whatsapp.position') }}',
      autoOpenTimeout: {{ setting('whatsapp.autoOpenTimeout') }},
      size: '{{ setting('whatsapp.size') }}'
    });
  </script>
  

</body>

</html>
