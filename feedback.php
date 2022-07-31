<?php include "inc/header.php"; ?>

<?php 
$feedback = [
  [
    "id" => "1",
    "name" => "Beth Williams",
    "email" => "beth@gmail.com",
    "body" => "Coding is for LIFE"
  ],
  [
    "id" => "2",
    "name" => "Lucy Luck",
    "email" => "lucy@gmail.com",
    "body" => "Coding can change your life"
  ],
  [
    "id" => "3",
    "name" => "Ross Johnsom",
    "email" => "ross@gmail.com",
    "body" => "Coding is for me"
  ]
  ];

  ?>
   
    <h2>Past Feedback</h2>
    <?php if(empty($feedback)) : ?>
      <p class="lead mt3">There is no feedback</p>
    <?php endif; ?>

    <?php foreach($feedback as $item): ?>

    <div class="card my-3 w-75">
     <div class="card-body text-center">
      <?php echo $item["body"]; ?>
     </div>
   </div>

   <?php endforeach; ?>
   <?php include "inc/footer.php"; ?>