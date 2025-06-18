<?Php
    include_once 'templates/header.php';

    if(isset($_GET['id'])) {
        $postId = $_GET['id'];
        $currentPost;

        foreach($posts as $post) {
            if($post['id'] == $postId) {
                $currentPost = $post;
            }
        }
    }
?>
    <main class="post-container">
        <div class="content-container">
            <h1 id="main-title"><?= $currentPost['title']; ?></h1>
            <p id="post-description"><?= $currentPost['description']; ?></p>
            <div class="img-container">
                <img src="<?= $base_url ?>/img/<?= $currentPost['img']; ?>" alt="<?= $currentPost['title']; ?>">
            </div>
            <p class="post-content">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Explicabo numquam accusamus voluptatibus maiores adipisci laboriosam distinctio blanditiis fugit harum consectetur molestias a, quisquam voluptate ab ea, sunt possimus cupiditate repellendus.
            Reiciendis, vero. Delectus quo vel sint nesciunt eius fuga? Expedita accusamus ipsa quidem sint excepturi temporibus modi omnis fugiat nihil et! Quo, saepe dolorum. Asperiores aperiam eum eaque minima a.
            Excepturi, vel facilis ullam, fuga consequatur error omnis eveniet eligendi, repellat quasi ut. Eligendi fugiat, facere deleniti sequi architecto libero quisquam optio hic, velit quae molestias et eveniet in suscipit.
            Sunt quam consequatur a ut, tempore minima nisi in illum itaque corrupti unde suscipit architecto eum ratione sequi dolorum id iste incidunt beatae cumque? Blanditiis quaerat molestias unde quibusdam culpa.
            Nemo deserunt beatae inventore asperiores? Ipsa, officiis. Numquam consequatur aut fugiat nemo tenetur, consequuntur sunt corrupti reprehenderit ex ea doloremque vero omnis nobis beatae illo odit nisi necessitatibus architecto minima?
            </p>
            <p class="post-content">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Explicabo numquam accusamus voluptatibus maiores adipisci laboriosam distinctio blanditiis fugit harum consectetur molestias a, quisquam voluptate ab ea, sunt possimus cupiditate repellendus.
            Reiciendis, vero. Delectus quo vel sint nesciunt eius fuga? Expedita accusamus ipsa quidem sint excepturi temporibus modi omnis fugiat nihil et! Quo, saepe dolorum. Asperiores aperiam eum eaque minima a.
            Excepturi, vel facilis ullam, fuga consequatur error omnis eveniet eligendi, repellat quasi ut. Eligendi fugiat, facere deleniti sequi architecto libero quisquam optio hic, velit quae molestias et eveniet in suscipit.
            Sunt quam consequatur a ut, tempore minima nisi in illum itaque corrupti unde suscipit architecto eum ratione sequi dolorum id iste incidunt beatae cumque? Blanditiis quaerat molestias unde quibusdam culpa.
            Nemo deserunt beatae inventore asperiores? Ipsa, officiis. Numquam consequatur aut fugiat nemo tenetur, consequuntur sunt corrupti reprehenderit ex ea doloremque vero omnis nobis beatae illo odit nisi necessitatibus architecto minima?
            </p>
        </div>
    </main>
    <aside id="navbar-container">
        <h3 id="tags-title">Tags</h3>
            <ul id="tag-list">
                    <?php foreach ($currentPost['tags'] as $tag): ?>
                        <li> <a href="#" class="tag"><?= $tag; ?></a> </li>
                    <?php endforeach; ?>
            </ul>
        <h3 class="categories-title">categorias</h3>
        <ul id="categories-list">
            <?php foreach ($currentPost['categories'] as $category): ?>
                <li> <a href="#" class="category"><?= $category; ?></a> </li>
            <?php endforeach; ?>
        </ul>
    </aside>

<?php
    include_once 'templates/footer.php';
?>