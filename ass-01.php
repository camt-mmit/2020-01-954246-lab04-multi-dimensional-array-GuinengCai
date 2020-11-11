<?php
/*ID: 612110237
Name: Guineng Cai 
*/
    echo "Input number of students: ";
    fscanf(STDIN, "%d", $n);
    echo "Input number of chapters: ";
    fscanf(STDIN, "%d", $nchpt);
    
    $format = "%s";
    for($i = 0; $i < $nchpt; $i++) {
        $format .= " %f";
    }
    
    $scores = [];
    for($i = 0; $i < $n; $i++) {
        printf("Student %2d score ( name", $i + 1);
        for($j = 0; $j < $nchpt; $j++) {
            printf(" chpt%d", $j + 1);
        }
        printf(" ): ");
        $scores[] = fscanf(STDIN, $format);
    }
    
    echo "\nResult:\n";
    printf("%-10s ", "");
    $line = "-----------";
    for($i = 0; $i < $nchpt; $i++) {
        printf(" %6d", $i + 1);
        $line .= "-------";
    }
    $line .= "---------";
    printf("\n%s\n", $line);
    foreach($scores as $i => $chpts) {
        $total = 0;
        printf("%-10s:", $chpts[0]);
        for($j = 1; $j < count($chpts); $j++) {
            $score = $chpts[$j];
            $total += $score;
            printf(" %6.2f", $score);
        }
        printf(" = %6.2f\n", $total);
    }
