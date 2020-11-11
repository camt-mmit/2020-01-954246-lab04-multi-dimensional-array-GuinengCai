<?php
/*ID: 612110237
Name: Guineng Cai 
*/
    printf("Input number of students: ");
    fscanf(STDIN, "%d", $n);
    printf("Input number of chapters: ");
    fscanf(STDIN, "%d", $nchpt);

    $input_format = "";
    $prompt_chpt = "";
    for($j = 0; $j < $nchpt; $j++) {
        $input_format .= " %f";
        $prompt_chpt .= " chpt".($j + 1);
    }
    $input_format = trim($input_format);
    $prompt_chpt = trim($prompt_chpt);

    $scores = [];
    for($i = 0; $i < $n; $i++) {
        printf("Student %2d score ( %s ): ", $i + 1, $prompt_chpt);
        $scores[] = fscanf(STDIN, $input_format);
    }

    printf("\nResult:\n");
    foreach($scores as $i => $chpts) {
        printf("Student %2d:", $i + 1);
        $total = 0;
        foreach($chpts as $chpt) {
            printf(" %6.2f", $chpt);
            $total += $chpt;
        }
        printf(" = %6.2f\n", $total);
    }