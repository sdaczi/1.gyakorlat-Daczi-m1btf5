<?php if (isset($hiba) && !empty($hiba)): ?>
    <p style="color:red;"><strong><?= $hiba ?></strong></p>
<?php endif; ?>
<br>
<form action="index.php?oldal=belepes" method="post">
    <fieldset>
        <legend>Bejelentkezés</legend><br>
        <input type="text" name="felhasznalo" placeholder="felhasználó" required><br><br>
        <input type="password" name="jelszo" placeholder="jelszó" required><br><br>
        <input type="submit" name="belepes" value="Belépés"><br>&nbsp;
    </fieldset>
</form>

<h3>Regisztrálja magát, ha még nem felhasználó!</h3>
<form action="index.php?oldal=regisztral" method="post">
    <fieldset>
        <legend>Regisztráció</legend><br>
        <input type="text" name="vezeteknev" placeholder="vezetéknév" required><br><br>
        <input type="text" name="utonev" placeholder="utónév" required><br><br>
        <input type="text" name="felhasznalo" placeholder="felhasználói név" required><br><br>
        <input type="password" name="jelszo" placeholder="jelszó" required><br><br>
        <input type="submit" name="regisztracio" value="Regisztráció"><br>&nbsp;
    </fieldset>
</form>
