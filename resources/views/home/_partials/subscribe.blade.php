<form action="https://sendy.murze.be/subscribe" method="post" accept-charset="utf-8">
    <div>
        <input type="email" id="email" name="email" placeholder="Your email…" required="required">
        <input type="submit" name="submit" id="submit" value="Subscribe">
        <input type="hidden" name="list" value="{{ config('services.sendy.list_id') }}">
    </div>
</form>