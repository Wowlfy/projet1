<section class=form id="form">
    <div class=head>
        <h2 class="h2-white">CONTACT ME</h2>
        <h3>Contact me through this form below</h3>
    </div>
    <form action="index.php" method="POST" novalidate>
        <?php if (!empty($errors)) : ?>
            <ul class="error">
                <?php foreach ($errors as $error) : ?>
                    <li><?= $error ?></li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
        <div class="log">
            <label for="firstname">FIRST NAME</label>
            <input type="text" placeholder="John" name="firstname" value="<?= $data['firstname'] ?? '' ?>" required>

            <label for="lastname">LAST NAME</label>
            <input type="text" placeholder="McClane" id="lastname" name="lastname" value="<?= $data['lastname'] ?? '' ?>" required>

            <label for="email">Email</label>
            <input type="text" placeholder="john@mcclane.com" id="email" name="email" value="<?= $data['email'] ?? '' ?>" required>
        </div>
        <div class="message">
            <label for="message">Message</label>
            <textarea placeholder="Type your message here" id="message" name="message" value="<?= $data['message'] ?? '' ?>" required></textarea>
        </div>

        <button>SEND</button>
    </form>
</section>