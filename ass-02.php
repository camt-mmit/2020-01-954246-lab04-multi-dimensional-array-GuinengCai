<?php
/*ID: 612110237
Name: Guineng Cai 
*/
    printf("Input data (floor n): ");
    fscanf(STDIN, "%d %d", $floor, $n);
    
    $building  = []; // indexing [floor][zone:j-axis][zone:i-axis]
    
    for($k = 0; $k < $floor; $k++) {
        $building[$k] = [];
        printf("Floor: %d\n", $k + 1);
        for($j = 0; $j < $n; $j++) {
            $building[$k][$j] = [];
            for($i = 0; $i < $n; $i++) {
                printf("\tInput number of people in zone %d-%d: ", $j + 1, $i + 1);
                fscanf(STDIN, "%d", $building[$k][$j][$i]);
            }
        }
    }
    
    // Just show the input data.
    // You may remove the following line.
    //var_dump($building);
    
    printf("\nPeople on each floor:\n");
    for($k = 0; $k < $floor; $k++) {
        printf("Floor: %d\n", $k + 1);
        $total = 0;
        for($j = 0; $j < $n; $j++) {
            printf("\t");
            for($i = 0; $i < $n; $i++){
                printf("%5d", $building[$k][$j][$i]);
                $total += $building[$k][$j][$i];
            }
            printf("\n");
        }
        printf("Number of people = %d\n", $total);
    }
    
    printf("\nPeople on each zone:\n");
    for($j = 0; $j < $n; $j++) {
        for($i = 0; $i < $n; $i++){
            printf("\tZone %d-%d:\n", $j + 1, $i + 1);
            $total = 0;
            for($k = $floor - 1; $k >= 0; $k--) {
                printf("\t%5d\n", $building[$k][$j][$i]);
                $total += $building[$k][$j][$i];
            }
            printf("Number of people = %d\n", $total);
        }
    }
