<form action="search_process.php" method="get">
    <label for="zoekveld">Zoeken</label>
    <input type="search" name="zoekveld" id="zoekveld">

    <label for="sorteer">Filter op prijs</label>
    <select name="sorteer" id="sorteer">
        <option value="">-- Prijs per dag --</option>
        <option value="price_per_day ASC">Laagste prijs</option>
        <option value="price_per_day DESC">Hoogste prijs</option>
    </select>

    <button type="submit">Zoek!</button>
</form>