
<!-- Footer -->
<footer class="py-5 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
    </div>
    <!-- /.container -->
</footer>

<!--POP OVER REQUIRED SCRIPT -->
<script src="https://v4-alpha.getbootstrap.com/assets/js/vendor/tether.min.js"></script>


<!-- Bootstrap core JavaScript -->

<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script>

    function ASubmit() {


      var passwordF =  $("#password").val();
      var emailF =  $("#email").val();
      var typeF = "ajax";


      $.ajax({

          method: "POST",
          url: "/login/recv",
          data: { email: emailF, password: passwordF, type: typeF },

          success:function(data){

              if(data == "good"){
                  window.document.location.href="/login?msg='User Good'";
              }else{
                  window.document.location.href="/login?msg='User Bad'";
              }

              console.log(data);
      }

      })
    }
</script>

</body>

</html>
