

<?php
echo '
<div class="adminform-container">
    <div class="admin-form-title">Add artwork:</div>
        <div class="theform">
            <form action="addArtwork1Handler.php" method="GET">
                    <input type="text" placeholder="name" name="name"><br>
                    <input type="text" placeholder="artwork-id" name="artist_id"><br>
                    <select type="select" placeholder="style" name="style">
                        <option value="Drawing">Drawings</option>
                        <option value="Painting">Painting</option>
                    </select><br>
                    <input type="text" placeholder="price" name="price"><br>
                    <input type="text" placeholder="img url (fredjourdin1.jpg)" name="url">
                    <br>
                    <select type="select" placeholder="type" name="type">
                        <option value="Realism">Realism</option>
                        <option value="Abstract">Abstract</option>
                    </select><br>
                    <input type="text" placeholder="hot(0 or 1)" name="hot"><br>
                    <button type="submit">Submit</button>
            </form>
        </div>
        <div class="thebuttons">Change artwork:<br><br>';
            include "isNotHot.php";
            include "isHot.php";
echo '
        </div>
</div>';
?>
