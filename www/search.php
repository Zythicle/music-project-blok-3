<form action="search_process.php" method="get">
    <label for="zoekveld">Zoeken</label>
    <input type="search" name="zoekveld" id="zoekveld">

    <label for="fuel">Filter op brandstof</label>
    <select name="zoekterm" id="fuel">
        <option value="">-- Alle brandstoffen --</option>
        <option value="petrol">Petrol</option>
        <option value="diesel">Diesel</option>
        <option value="electric">Electric</option>
        <option value="hybrid">Hybrid</option>
    </select>

    <label for="sorteer">Sorteer op</label>
    <select name="sorteer" id="sorteer">
        <option value="">Geen</option>
        <option value="brand">Brand</option>
        <option value="model">Model</option>
        <option value="year">Year</option>
    </select>

    <button type="submit">Zoek!</button>
</form>