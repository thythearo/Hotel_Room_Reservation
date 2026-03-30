<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ai HOTEL -CONTACT</title>


  <!-- Swiper js -->

  <!-- new font add -->
  <?php
  require('inc/Link.php');
  ?>
</head>

<body class="bg-light">
  <?php require('inc/header.php'); ?>

  <div class="my-5 px-4">
    <h2 class="fw-bold text-center">
      CONTACT US
    </h2>
    <div class="h-line bg-dark"></div>
    <p class="text-center mt-3">
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae neque expedita
      asperiores earum dolorem dolorum aut inventore ipsa architecto nihil.
    </p>
  </div>
  <?php
    $contact_q = "SELECT * FROM `contact` WHERE `no`=?";
    $values = [1];
    $contact_r = mysqli_fetch_assoc(select($contact_q, $values,'i'));
  ?>
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-6 mb-5 px-4">
        <div class="bg-white rounded p-4 shadow">
          <iframe class="w-100" height="320px"
          <?php
            echo $contact_r['iframe'];
          ?> loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          <h4>Address</h4>
          <a href="<?php echo $contact_r['gmap']; ?>" target="_blank"
            class="d-inline-block text-decoration-none mb-2">
            <i class="bi bi-geo-alt-fill"></i> <?php echo $contact_r['address'] ?>
          </a>
          <h5 class="mt-4">Call Us</h5>
          <a href="tell: +<?php echo $contact_r['pn1'] ?>" class="d-inline-block mb-2 text-decoration-none text-dark">
            <i class="bi bi-telephone-fill"></i>+<?php echo $contact_r['pn1'] ?>
          </a>
          <br>
          <?php
            if($contact_r['pn2']!=''){
              echo<<<data
                <a href="tell: + $contact_r[pn2]" class="d-inline-block text-decoration-none text-dark">
                  <i class="bi bi-telephone-fill"></i>+ $contact_r[pn2]
                </a>
              data;
            }
          ?>
          <h5 class="mt-4">Email:</h5>
          <a href="Email: <?php echo $contact_r['email']?> "class="d-inline-block text-decoration-none text-dark"><i
              class="bi bi-envelope-open-fill"></i> <?php echo $contact_r['email'] ?></a>

          <h5 class="mt-4">Follow us</h5>
          <a href="<?php echo $contact_r['tw']?>" class="d-inline-block mb-3 text-dark fs-5 me-2">
            <i class="bi bi-twitter me-1"></i>
          </a>
          <a href="<?php echo $contact_r['fb']?>" class="d-inline-block mb-3 text-dark fs-5 me-2">
            <i class="bi bi-facebook me-1"></i>
          </a>
          <a href="<?php echo $contact_r['insta']?>" class="d-inline-block mb-3 text-dark fs-5">
            <i class="bi bi-instagram me-1"></i>
          </a>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 px-4">
        <div class="bg-white rounded p-4 shadow">
          <form>
            <h5>Send Message</h5>
            <div class="mt-3">
              <label class="form-label" style="font-weight: 500;">Name</label>
              <input type="text" class="form-control shadow-none">
            </div>
            <div class="mt-3">
              <label class="form-label" style="font-weight: 500;">Email</label>
              <input type="email" class="form-control shadow-none">
            </div>
            <div class="mt-3">
              <label class="form-label" style="font-weight: 500;">Subject</label>
              <input type="text" class="form-control shadow-none">
            </div>
            <div class="mt-3">
              <label class="form-label" style="font-weight: 500;">Message</label>
              <textarea class="form-control shadow-none" rows="5" style="resize: none;"></textarea>
            </div>
            <button type="submit" class="btn text-white custom-bg mt-3">SEND</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <?php
  require('inc/footer.php');
  ?>

</body>

</html>
l