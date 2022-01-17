# Owsome Test Paper

Owsome Test Paper

## PSR-4

- setup composer.json
- require vendor/autoload

## OOP

- app/MyNamespace/Classes

## Class

- Class Trip
- Class Output

## API value file

- boadingpass.json

## API Properties For BoardingPass (Dynamic Properties)

1. departure
2. arrival
3. transport
4. gate
5. seat
6. baggage

## Class Function 

- switchArrayPositions - Swap Array Positions
- shuffleArray - shuffle array
- reorderPass - loop boarding pass array
- outputText - add in string text to output

## How it works

1. Declare boarding pass object values in boardingpass.json
2. Json object with dynamic departure, arrival, transport, gate, seat and baggage values
3. Mixup the boarding pass object using Shuffle
4. Loop the boarding pass object and matching with arrivel == departure algorithm to get appropriate json object sorting
5. Convert objects into array
6. Implode array and display output

```
cd existing_repo
git remote add origin https://github.com/wanweilun1986/owsome-test.git
git branch -M main
git push -uf origin main
```