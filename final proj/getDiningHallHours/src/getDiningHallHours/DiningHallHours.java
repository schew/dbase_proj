package getDiningHallHours;

import java.io.FileNotFoundException;
import java.io.PrintWriter;
import java.io.UnsupportedEncodingException;

public class DiningHallHours {

	public static void main(String[] args) throws FileNotFoundException, UnsupportedEncodingException {
		int locCount, dateCount, mealCount;
		String loc = "", date = "", meal = "", startTime = "", endTime = "";
		int menuID = 1;

		PrintWriter pw = new PrintWriter("addDiningHallHours.txt", "UTF-8");

		for(dateCount=1; dateCount<=7 ; dateCount++){
			for(locCount=1; locCount<=3; locCount++){
				for(mealCount=1; mealCount<=3; mealCount++){
					switch (mealCount){
					case 1: meal = "Breakfast";
					startTime = "7:00";
					endTime = "10:00";
					break;
					case 2: meal = "Lunch";
					startTime = "11:00";
					endTime = "2:00";
					break;
					case 3: meal = "Dinner";
					startTime = "5:00";
					endTime = "10:00";
					break;
					}
					switch (dateCount){
					case 1: date = "11/16/14"; break;
					case 2: date = "11/17/14"; break;
					case 3: date = "11/18/14"; break;
					case 4: date = "11/19/14"; break;
					case 5: date = "11/20/14"; break;
					case 6: date = "11/21/14"; break;
					case 7: date = "11/22/14"; break;
					}
					switch (locCount){
					case 1: loc = "FFC"; break;
					case 2: loc = "Nolans"; break;
					case 3: loc = "Levering"; break;
					}
					pw.println("insert into DiningHallHours values ( '"+loc+"', "+date+"', '"+meal+"', '"+startTime+"', '"+endTime+"', "+menuID+");");
					menuID++;
				}
			}
		}
		pw.close();

	}

}
