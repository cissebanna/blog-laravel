@csrf
<div class="form-group">
    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
        placeholder="Votre pseudo ..." value="{{ old('name') ?? $client->name }}">
    @error('name')
        <div class="alert alert-danger">{{ $errors->first('name') }}</div>
    @enderror
</div>

<div class="form-group">
    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
placeholder="Votre email ..." value="{{ old('email') ?? $client->email }}">
    @error('email')
        <div class="alert alert-danger">{{ $errors->first('email') }}</div>
    @enderror
</div>
<div class="form-group">
    <select class="custom-select  @error('status') is-invalid @enderror" name="status">
        @foreach ($client->getStatusOptions() as $key => $value)
    <option value="{{ $key }}" {{ $client->status == $value ? 'selected' : '' }}>{{$value}}</option>
        @endforeach
    </select>
    @error('status')
        <div class="alert alert-danger">{{ $errors->first('status') }}</div>
    @enderror
</div>

    <div class="form-group">
    <select class="custom-select  @error('entreprise_id') is-invalid @enderror" name="entreprise_id">
        @foreach ($entreprises as $entreprise)
                <option value="{{ $entreprise->id }}" {{ $client->entreprise_id == $entreprise->id ? 'selected' : ''}}>{{ $entreprise->name }}</option>
        @endforeach
    </select>
    @error('entreprise_id')
        <div class="alert alert-danger">{{ $errors->first('entreprise_id') }}</div>
    @enderror
</div>
