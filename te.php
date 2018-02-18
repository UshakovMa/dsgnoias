<?php

echo base_convert(sha1(uniqid(mt_rand(), true)), 16, 32);