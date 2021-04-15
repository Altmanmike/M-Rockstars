<?php
    require_once 'inc/functions.php';  
    require 'inc/header.php';         
?>  

<!-- HEADER --->
<header class="container-fluid my-5 p-0">
    
    <section id="header-page">        
        <h4 class="text-center text-light m-0 p-4 slide-in-fwd-center">Section Tour</h4>
        <h5 class="text-center text-light m-0 p-4 slide-in-fwd-center-2">Quelques dates de concert en France pour 2021!</h5>
    </section> 
    
</header>
<!-- HEADER ---> 

<!-- SECTION PRESENT -->
<section id="table" class="container text-center pb-5 slide-in-fwd-top">
    
    <h3 class="text-center py-5 slide-in-fwd-bottom">Dates françaises</h3>
    
    <table class="table table-hover">
        <thead class="table-light">
            <tr>
                <td>Groupe</td>
                <td>Date</td>
                <td>Ville</td>
                <td>Salle de concert</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Rammstein</td>
                <td>09/07/2021</td>
                <td>Lyon</td>
                <td>Groupama Stadium</td>
            </tr>
            <tr>
                <td>Rammstein</td>
                <td>10/07/2021</td>
                <td>Lyon</td>
                <td>Groupama Stadium</td>
            </tr>
            <tr>
                <td>Iron Maiden</td>
                <td>11/07/2021</td>
                <td>Paris</td>
                <td>Paris La Défense Arena</td>
            </tr>
            <tr>
                <td>Foo Fighters</td>
                <td>14/06/2021</td>
                <td>Nîmes</td>
                <td>Arènes de Nîmes</td>
            </tr>
            <tr>
                <td>Foo Fighters</td>
                <td>15/06/2021</td>
                <td>Nîmes</td>
                <td>Arènes de Nîmes</td>
            </tr>
        </tbody>
    </table>
</section>

<?php require 'inc/footer.php'; ?>