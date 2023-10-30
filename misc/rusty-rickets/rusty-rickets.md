# challenge
Ol' rusty rickets pls configure me properly, I promise to be good xD</br>

NOTE: this is the only challenge that the flag is different a little bit, I might be joking but have fun</br>
[file1](./config-me) [file2](./config-me.conf)</br>

# solution
run file on the files</br>
file1 is an [elf-file](https://en.wikipedia.org/wiki/Executable_and_Linkable_Format)</br>
and file2 is a a configuration file</br>
incase you don't believe me:</br>
![img](./img1.png)</br>
i googled "rust ctf challenge"(because i was learning on the job lol) and stumbled across [this](https://github.com/xxg1413/rust-ctf)</br>
i clicked on "BSidesSF 2020 CTF:config-me" because it seemed familiar (because of the file names) and ended up with this [writeup](https://ctftime.org/writeup/18517)</br>
i followed their footsteps and closed ghidra</br>
the key is to replace the name value with the encrypted strings and the program will automatically decode it for you</br>
shout out to the troll involved in making this challenge</br>
default config</br>
![img](./img2.png)</br>
with pass value replacing the name value</br>
![img](./img3.png)</br>
with kit value replacing the name value</br>
![img](./img4.png)</br>
with flag value replacing the name value. this nearly sent me down a rabbit hole</br>
![img](./img5.png)</br>
with mail value replacing the name value. i was just burst out laughing at this point</br>
![img](./img6.png)</br>
with ctf value replacing the name value</br>
![img](./img7.png)</br>
with password value replacing the name value. flag at last</br>
![img](./img8.png)</br>
with password value replacing the name value</br>
![img](./img9.png)</br>
voila!</br>

# flag
acdfCTF{Old_rusty_krabs}