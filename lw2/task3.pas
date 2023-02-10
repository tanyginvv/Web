PROGRAM HelloDear(INPUT, OUTPUT);
USES
  DOS;
VAR
  QueryString, TextOut, Temp: STRING;
  Number: INTEGER;
BEGIN {HelloDear}
  WRITELN('Content-Type: text/plain');
  WRITELN;
  QueryString := GetEnv('QUERY_STRING');
  TextOut := '';
  IF ((Copy(QueryString, 0, 5)) = 'name=')
  THEN
    BEGIN
      WRITE('Hello dear, ');
      Number := Pos('&', QueryString);
      IF (Number = 0)
      THEN
        BEGIN
          Temp := Copy(QueryString, 6, Length(QueryString));
          TextOut := Temp + '!'
        END
      ELSE
        BEGIN
          Temp := Copy(QueryString, 6, Number - 6);
          TextOut := Temp + '!'
        END
    END
  ELSE
    TextOut := 'Hello Anonymous!';
  WRITELN(TextOut)
END.{HelloDear}

