<form method="POST" action="{{route('user.register')}}">
    @csrf
    <input type="text" name="name" placeholder="Name" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Password" required>
    <input type="submit" value="送信">
</form>
{{ $user->name }}さん、こんにちは！<br>
