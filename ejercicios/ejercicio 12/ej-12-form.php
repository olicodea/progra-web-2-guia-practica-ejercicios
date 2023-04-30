<h4>Hola visitante extraterrestre, registra tu nombre</h4>
<form action="resultado-ej-12.php" class="card" method="POST" enctype="application/x-www-form-urlencoded">
    <div class="formGroup">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" placeholder="nombre.." required>
    </div>
    <div class="formGroup">
        <label for="planeta">Planeta al que pertenece:</label>
        <select name="planeta" id="planeta" required>
            <option value="Tierra">Tierra</option>
            <option value="Marte">Marte</option>
            <option value="Jupìter">Jupiter</option>
            <option value="Venus">Venus</option>
            <option value="Trappist-1">Trappist</option>
            <option value="Kepler-442">Kepler</option>
        </select>
    </div>
    <input type="submit" value="GUARDAR" class="btn">
</form>