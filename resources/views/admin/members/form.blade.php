<div class="row">
    <div class="form-group col-sm-12 col-md-4">
        <label for="name" class="required">Nome </label>
        <input type="text" name="name" id="name" autofocus class="form-control" required value="{{ old('name', $member->name) }}">
    </div>
    <div class="form-group col-sm-12 col-md-4">
        <label for="email" class="required">E-mail </label>
        <input type="email" name="email" id="email" class="form-control" required value="{{ old('email', $member->email) }}">
    </div>
    <div class="form-group col-sm-12 col-md-4">
        <label for="password" class="required">Senha </label>
        <input type="password" name="password" id="password" class="form-control" required>
    </div>
</div>