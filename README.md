# The Dream ( our very first complete PHP project ! )

## The mission 
Create a currency converter for your dream destination ! Often you get ripped off because you are a tourist, here we can check how much exactly that drink costs. 
Please note : This exercise has no API's, valuta rates are subjective to the exchange rate at that time ( line 47 and below ) ! In no way this is a live representation of the chosen currencies, don't take this too seriously (nothing on this account for now :D)
-> Chosen destination is Madagascar , currency is Malagasy Ariary. 
-> Added Mexican Pesos
-> My native currency is Euro

## Features 
Convert Mexican Pesos, Malagasy Ariary and Euro's (static) ! 
- Everything linked in the same index.php (no index.html, no JS, no external CSS, no Frameworks)
- input field to fill in the amount 
    - dropdown 1 : choose currency to convert FROM
    - dropdown 2 : choose currency to convert TO
    - button : submit and convert the requested

## How the code works 
- HTML : four fields wrapped in container, very basic (no Bootstrap used)
- PHP : 
    - First check for errors, and display them (for bugfixing, thanks Bert <3)
    - If any input gets passed through $_POST :
        - fetch the needed HTML inputs and put them in new variables :
        - compare the selected currencies against eachother
            - echo convert FROM (in orange)
            - echo convertion TO (in pink)
            - echo currency extension because fancier and readable
            - break line and center the display
- Succes, you see how your cocktail costs ! 

### WIP
- make responsive (once again, i was dumb and started desktop first)
- Reaching the destinations so i can at least try the app, and hope the exchange    rates haven't changed to drastically ;).

# Thanks again for checking my repo fam ! 
