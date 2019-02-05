<?php
echo '

    <div class="admin-form debug">
    <div class="admin-form-title">Add artist</div>
    <form action="addArtistHandler.php" method="GET">
        <input type="text" placeholder="name" name="name"><br>
        <input type="text" placeholder="artist-bio" name="artist_bio"><br>
        <select type="text" placeholder="style" name="style">
            <option value="Drawings">Drawing</option>
            <option value="Paintings">Painting</option>
        </select>   <br>
        <input type="text" placeholder="monthly(0 or 1)" name="monthly"><br>
        <input type="text" placeholder="img url" name="url"><br>
        <select type="text" placeholder="type" name="type"><br>
            <option value="Realism">Realism</option>
            <option value="Abstract">Abstract</option>
        </select><br>
        <button type="submit">Submit</button>
    </form>
</div>';

?>