(*Èíèöèàëèçàöèÿ ýìèòòåðîâ è ðåìóâåðîâ*)
DO_xEmitter:=DO_xRemover:=TRUE;

(*çàïóñê êîíâååðîâ è êíîïêè óïðàâëåíèÿ*)
RS1(SET := DI_xStart, RESET1 := NOT DI_xStop OR NOT DI_xAlarmStop);
DO_xStartLedButton := (DI_xStart);
DO_xStopLedButton := (NOT DI_xStop);
DO_xConveerOne := DO_xStartLed := RS1.Q1;
IF(RS1.Q1 AND AI_wPotentiommetr > 5) THEN
	AO_wConveerTwo := AI_wPotentiommetr;
ELSIF(RS1.Q1 AND AI_wPotentiommetr<=5) THEN
	AO_wConveerTwo := 5;
ELSE
	AO_wConveerTwo := 0;
END_IF;
DO_xStopLed := NOT RS1.Q1;
DO_xAlarmLed := DO_xAlarmZoom := NOT DI_xAlarmStop;