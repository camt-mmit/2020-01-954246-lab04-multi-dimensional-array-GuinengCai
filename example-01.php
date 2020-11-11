<?php
/*ID: 612110237
Name: Guineng Cai 
*/
    printf("Input number of students: ");
    fscanf(STDIN, "%d", $n);

    $scores = [];
    for($i = 0; $i < $n; $i++) {
        printf("Student %2d score ( chpt1 chpt2 ): ", $i + 1);
        $scores[] = fscanf(STDIN, "%f %f");
    }

    printf("\nResult:\n");
    for($i = 0; $i < $n; $i++) {
        printf("Student %2d: %6.2f %6.2f = %6.2f\n", $i + 1,
            $scores[$i][0], $scores[$i][1], $scores[$i][0]+ $scores[$i][1]);
    }
