<!-- resources/views/form_with_recaptcha.blade.php -->

<form id="demo-form" action="{{ route('form.submit') }}" method="post">
    @csrf
    <!-- Vos champs de formulaire ici -->
    <button class="g-recaptcha" data-sitekey="{{ env('6LdBGiApAAAAANi79UEHr7lmrern9tFeAkz3qvEi') }}" data-callback="onSubmit" data-action="submit">Submit</button>
</form>

<script>
    function onSubmit(token) {
        document.getElementById("demo-form").submit();
    }
</script>
