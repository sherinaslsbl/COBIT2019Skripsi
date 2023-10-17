<form action = "" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label for="userId">User ID :</label>
        <input type="text" class="form-control" id="userId">
    </div>
    <div class="form-group">
        <label for="username">Username :</label>
        <input type="text" class="form-control" id="username" name="username">
    </div>
    <div class="form-group">
        <label for="fullname">Fullname :</label>
        <input type="text" class="form-control" id="fullname" name="fullname">
    </div>
    <div class="form-group">
        <label for="password">Password :</label>
        <input type="text" class="form-control" id="password" name="password">
    </div>
    <div class="form-group">
    <label for="usergroup">User group :</label>
        <select class="custom-select" name="usergroup">
        <option selected>Pilih Salah Satu...</option>
        <option value="1">Admin</option>
        <option value="2">Konsultan</option>
        <option value="3">PC</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary w-100">Submit</button>
</form>