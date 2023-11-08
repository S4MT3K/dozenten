<?php

interface IGehalt{                      //besseren Namen finden (überbegriff)vvv
    public function getGehalt() : float;
    public function getName($vorname, $nachname);
}
