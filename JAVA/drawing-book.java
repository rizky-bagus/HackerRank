
import java.io.*;
import java.util.*;
import java.text.*;
import java.math.*;
import java.util.regex.*;

public class Solution {

    public static void main(String[] args) {
        Scanner in = new Scanner(System.in);
        int n = in.nextInt();
        int p = in.nextInt();
        
        int beg = (p/2);
        int end = 0;
        if(n%2==1)
            end = (n-p)/2;
        else
            end = (int) Math.ceil((n-p)/2.0);
        
        System.out.println(Math.min(beg,end));
    }
}
