{{-- <div>
    <!-- Let all your things have their places; let each part of your business have its time. - Benjamin Franklin -->

<h1>Add new User</h1>
<form action="adduser" method="post">
    @csrf
    <div class="input-wrapper">Name:</div>
    <input type="text" id="name" name="name" required><br><br>
    <div class="input-wrapper">Email:</div>
    <input type="email" id="email" name="email" required><br><br>
    <div class="input-wrapper">city:</div>
    <input type="city" id="city" name="city" required><br><br>
    <div class="input-wrapper">
<button type="submit">Add user</button>
    </div>
    </form>

</div>
<style>
    input{
        border: :black 1px solid ;
        height:35px;
        width:200px;
        border-radius:2px;
        color:orange;

    }
    </style> --}}
{{-- @if ($error->any())
@foreach ($error->all() as $error )
<div>
    {{$error}}
</div>
@endforeach
@endif

@endforeach

@endif --}}

<div>
    <h2>Add New user </h2>
    <form action="adduser" method="POST">
        @csrf
        <div class="input-wrapper">
            <h1> User SKill </h1>
            <input type="checkbox" id="php" name="skill[]" value="php">
            <label for="php">PHP</label>
            <input type="checkbox" id="node" name="skill[]" value="node">
            <label for="node">Node</label>
            <input type="checkbox" id="java" name="skill[]" value="java">
            <label for="java">Java</label>
            <input type="checkbox" id="ruby" name="skill[]" value="ruby">
            <label for="ruby">Ruby</label>
        </div>
        <div class="input-wrapper">
            <h1> Gender </h1>
            <input type="radio" id="male" name="gender" value="male">
            <label for="male">Male</label>
            <input type="radio" id="female" name="gender" value="female">
            <label for="female">Female</label>

        </div>

        <h5> City </h5>
        <select name="city" id="city">
            <option value="kolkata">Kolkata</option>
            <option value="mumbai">Mumbai</option>
            <option value="delhi">Delhi</option>
            <option value="chennai">Chennai</option>
        </select>
</div>
<h5>Age</h5>
<div>
    <input type="range" name="age" min="18" max="100">
</div>
<button>Add user</button>
</form>

</div>
