<?php
// Generated by "gen_east_asian_width.php" from "http://www.unicode.org/Public/10.0.0/ucd/EastAsianWidth.txt".
$eaw_regex = '/\xe1(?:\x84[\x80-\xbf]|\x85[\x80-\x9f])|\xe2(?:\x8c[\x9a\x9b\xa9\xaa]|\x8f[\xa9-\xac\xb0\xb3]|\x97[\xbd\xbe]|\x98[\x94\x95]|\x99[\x88-\x93\xbf]|\x9a[\x93\xa1\xaa\xab\xbd\xbe]|\x9b[\x84\x85\x8e\x94\xaa\xb2\xb3\xb5\xba\xbd]|\x9c[\x85\x8a\x8b\xa8]|\x9d[\x8c\x8e\x93-\x95\x97]|\x9e[\x95-\x97\xb0\xbf]|\xac[\x9b\x9c]|\xad[\x90\x95]|\xba[\x80-\x99\x9b-\xbf]|\xbb[\x80-\xb3]|[\xbc-\xbe][\x80-\xbf]|\xbf[\x80-\x95\xb0-\xbb])|\xe3(?:\x80[\x80-\xbe]|\x81[\x81-\xbf]|\x82[\x80-\x96\x99-\xbf]|\x83[\x80-\xbf]|\x84[\x85-\xae\xb1-\xbf]|\x85[\x80-\xbf]|\x86[\x80-\x8e\x90-\xba]|\x87[\x80-\xa3\xb0-\xbf]|\x88[\x80-\x9e\xa0-\xbf]|\x89[\x80-\x87\x90-\xbf]|\x8a[\x80-\xbf]|\x8b[\x80-\xbe]|[\x8c-\xbf][\x80-\xbf])|\xe4(?:[\x80-\xb6][\x80-\xbf]|[\xb8-\xbf][\x80-\xbf])|[\xe5-\xe9][\x80-\xbf][\x80-\xbf]|\xea(?:[\x80-\x91][\x80-\xbf]|\x92[\x80-\x8c\x90-\xbf]|\x93[\x80-\x86]|\xa5[\xa0-\xbc]|[\xb0-\xbf][\x80-\xbf])|[\xeb\xec][\x80-\xbf][\x80-\xbf]|\xed(?:[\x80-\x9d][\x80-\xbf]|\x9e[\x80-\xa3])|\xef(?:[\xa4-\xab][\x80-\xbf]|\xb8[\x90-\x99\xb0-\xbf]|\xb9[\x80-\x92\x94-\xa6\xa8-\xab]|\xbc[\x81-\xbf]|\xbd[\x80-\xa0]|\xbf[\xa0-\xa6])|\xf0(?:\x96\xbf[\xa0\xa1]|\x97[\x80-\xbf][\x80-\xbf]|\x98(?:[\x80-\x9e][\x80-\xbf]|\x9f[\x80-\xac]|[\xa0-\xaa][\x80-\xbf]|\xab[\x80-\xb2])|\x9b(?:[\x80-\x83][\x80-\xbf]|\x84[\x80-\x9e]|\x85[\xb0-\xbf]|[\x86-\x8a][\x80-\xbf]|\x8b[\x80-\xbb])|\x9f(?:\x80\x84|\x83\x8f|\x86[\x8e\x91-\x9a]|\x88[\x80-\x82\x90-\xbb]|\x89[\x80-\x88\x90\x91\xa0-\xa5]|\x8c[\x80-\xa0\xad-\xb5\xb7-\xbf]|\x8d[\x80-\xbc\xbe\xbf]|\x8e[\x80-\x93\xa0-\xbf]|\x8f[\x80-\x8a\x8f-\x93\xa0-\xb0\xb4\xb8-\xbf]|\x90[\x80-\xbe]|\x91[\x80\x82-\xbf]|\x92[\x80-\xbf]|\x93[\x80-\xbc\xbf]|\x94[\x80-\xbd]|\x95[\x8b-\x8e\x90-\xa7\xba]|\x96[\x95\x96\xa4]|\x97[\xbb-\xbf]|\x98[\x80-\xbf]|\x99[\x80-\x8f]|\x9a[\x80-\xbf]|\x9b[\x80-\x85\x8c\x90-\x92\xab\xac\xb4-\xb8]|\xa4[\x90-\xbe]|\xa5[\x80-\x8c\x90-\xab]|\xa6[\x80-\x97]|\xa7[\x80\x90-\xa6])|[\xa0-\xae][\x80-\xbf][\x80-\xbf]|\xaf(?:[\x80-\xbe][\x80-\xbf]|\xbf[\x80-\xbd])|[\xb0-\xbe][\x80-\xbf][\x80-\xbf]|\xbf(?:[\x80-\xbe][\x80-\xbf]|\xbf[\x80-\xbd]))/'; // 181738 code points.

// Generated by "gen_cat_regex_alts.php" from "http://www.unicode.org/Public/10.0.0/ucd/UnicodeData.txt".
$m_regex = '/\xcc[\x80-\xbf]|\xcd[\x80-\xaf]|\xd2[\x83-\x89]|\xd6[\x91-\xbd\xbf]|\xd7[\x81\x82\x84\x85\x87]|\xd8[\x90-\x9a]|\xd9[\x8b-\x9f\xb0]|\xdb[\x96-\x9c\x9f-\xa4\xa7\xa8\xaa-\xad]|\xdc[\x91\xb0-\xbf]|\xdd[\x80-\x8a]|\xde[\xa6-\xb0]|\xdf[\xab-\xb3]|\xe0(?:\xa0[\x96-\x99\x9b-\xa3\xa5-\xa7\xa9-\xad]|\xa1[\x99-\x9b]|\xa3[\x94-\xa1\xa3-\xbf]|\xa4[\x80-\x83\xba-\xbc\xbe\xbf]|\xa5[\x80-\x8f\x91-\x97\xa2\xa3]|\xa6[\x81-\x83\xbc\xbe\xbf]|\xa7[\x80-\x84\x87\x88\x8b-\x8d\x97\xa2\xa3]|\xa8[\x81-\x83\xbc\xbe\xbf]|\xa9[\x80-\x82\x87\x88\x8b-\x8d\x91\xb0\xb1\xb5]|\xaa[\x81-\x83\xbc\xbe\xbf]|\xab[\x80-\x85\x87-\x89\x8b-\x8d\xa2\xa3\xba-\xbf]|\xac[\x81-\x83\xbc\xbe\xbf]|\xad[\x80-\x84\x87\x88\x8b-\x8d\x96\x97\xa2\xa3]|\xae[\x82\xbe\xbf]|\xaf[\x80-\x82\x86-\x88\x8a-\x8d\x97]|\xb0[\x80-\x83\xbe\xbf]|\xb1[\x80-\x84\x86-\x88\x8a-\x8d\x95\x96\xa2\xa3]|\xb2[\x81-\x83\xbc\xbe\xbf]|\xb3[\x80-\x84\x86-\x88\x8a-\x8d\x95\x96\xa2\xa3]|\xb4[\x80-\x83\xbb\xbc\xbe\xbf]|\xb5[\x80-\x84\x86-\x88\x8a-\x8d\x97\xa2\xa3]|\xb6[\x82\x83]|\xb7[\x8a\x8f-\x94\x96\x98-\x9f\xb2\xb3]|\xb8[\xb1\xb4-\xba]|\xb9[\x87-\x8e]|\xba[\xb1\xb4-\xb9\xbb\xbc]|\xbb[\x88-\x8d]|\xbc[\x98\x99\xb5\xb7\xb9\xbe\xbf]|\xbd[\xb1-\xbf]|\xbe[\x80-\x84\x86\x87\x8d-\x97\x99-\xbc]|\xbf\x86)|\xe1(?:\x80[\xab-\xbe]|\x81[\x96-\x99\x9e-\xa0\xa2-\xa4\xa7-\xad\xb1-\xb4]|\x82[\x82-\x8d\x8f\x9a-\x9d]|\x8d[\x9d-\x9f]|\x9c[\x92-\x94\xb2-\xb4]|\x9d[\x92\x93\xb2\xb3]|\x9e[\xb4-\xbf]|\x9f[\x80-\x93\x9d]|\xa0[\x8b-\x8d]|\xa2[\x85\x86\xa9]|\xa4[\xa0-\xab\xb0-\xbb]|\xa8[\x97-\x9b]|\xa9[\x95-\x9e\xa0-\xbc\xbf]|\xaa[\xb0-\xbe]|\xac[\x80-\x84\xb4-\xbf]|\xad[\x80-\x84\xab-\xb3]|\xae[\x80-\x82\xa1-\xad]|\xaf[\xa6-\xb3]|\xb0[\xa4-\xb7]|\xb3[\x90-\x92\x94-\xa8\xad\xb2-\xb4\xb7-\xb9]|\xb7[\x80-\xb9\xbb-\xbf])|\xe2(?:\x83[\x90-\xb0]|\xb3[\xaf-\xb1]|\xb5\xbf|\xb7[\xa0-\xbf])|\xe3(?:\x80[\xaa-\xaf]|\x82[\x99\x9a])|\xea(?:\x99[\xaf-\xb2\xb4-\xbd]|\x9a[\x9e\x9f]|\x9b[\xb0\xb1]|\xa0[\x82\x86\x8b\xa3-\xa7]|\xa2[\x80\x81\xb4-\xbf]|\xa3[\x80-\x85\xa0-\xb1]|\xa4[\xa6-\xad]|\xa5[\x87-\x93]|\xa6[\x80-\x83\xb3-\xbf]|\xa7[\x80\xa5]|\xa8[\xa9-\xb6]|\xa9[\x83\x8c\x8d\xbb-\xbd]|\xaa[\xb0\xb2-\xb4\xb7\xb8\xbe\xbf]|\xab[\x81\xab-\xaf\xb5\xb6]|\xaf[\xa3-\xaa\xac\xad])|\xef(?:\xac\x9e|\xb8[\x80-\x8f\xa0-\xaf])|\xf0(?:\x90(?:\x87\xbd|\x8b\xa0|\x8d[\xb6-\xba]|\xa8[\x81-\x83\x85\x86\x8c-\x8f\xb8-\xba\xbf]|\xab[\xa5\xa6])|\x91(?:\x80[\x80-\x82\xb8-\xbf]|\x81[\x80-\x86\xbf]|\x82[\x80-\x82\xb0-\xba]|\x84[\x80-\x82\xa7-\xb4]|\x85\xb3|\x86[\x80-\x82\xb3-\xbf]|\x87[\x80\x8a-\x8c]|\x88[\xac-\xb7\xbe]|\x8b[\x9f-\xaa]|\x8c[\x80-\x83\xbc\xbe\xbf]|\x8d[\x80-\x84\x87\x88\x8b-\x8d\x97\xa2\xa3\xa6-\xac\xb0-\xb4]|\x90[\xb5-\xbf]|\x91[\x80-\x86]|\x92[\xb0-\xbf]|\x93[\x80-\x83]|\x96[\xaf-\xb5\xb8-\xbf]|\x97[\x80\x9c\x9d]|\x98[\xb0-\xbf]|\x99\x80|\x9a[\xab-\xb7]|\x9c[\x9d-\xab]|\xa8[\x81-\x8a\xb3-\xb9\xbb-\xbe]|\xa9[\x87\x91-\x9b]|\xaa[\x8a-\x99]|\xb0[\xaf-\xb6\xb8-\xbf]|\xb2[\x92-\xa7\xa9-\xb6]|\xb4[\xb1-\xb6\xba\xbc\xbd\xbf]|\xb5[\x80-\x85\x87])|\x96(?:\xab[\xb0-\xb4]|\xac[\xb0-\xb6]|\xbd[\x91-\xbe]|\xbe[\x8f-\x92])|\x9b\xb2[\x9d\x9e]|\x9d(?:\x85[\xa5-\xa9\xad-\xb2\xbb-\xbf]|\x86[\x80-\x82\x85-\x8b\xaa-\xad]|\x89[\x82-\x84]|\xa8[\x80-\xb6\xbb-\xbf]|\xa9[\x80-\xac\xb5]|\xaa[\x84\x9b-\x9f\xa1-\xaf])|\x9e(?:\x80[\x80-\x86\x88-\x98\x9b-\xa1\xa3\xa4\xa6-\xaa]|\xa3[\x90-\x96]|\xa5[\x84-\x8a]))|\xf3\xa0(?:[\x84-\x86][\x80-\xbf]|\x87[\x80-\xaf])/'; // 2177 code points.
