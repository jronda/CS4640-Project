
/*
 * code for servlet lify cycle 
 *  - modified from "Professional Java Server Programming", Patzer et al., 
 *    Edition J2EE, Ch 9, pg 401
 */

import java.io.IOException;
import java.io.PrintWriter;
import java.util.ArrayList;
import java.text.SimpleDateFormat;  
import java.util.Date;  

import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
import javax.servlet.http.HttpSession;

@WebServlet("/Testing")
public class Testing extends HttpServlet 
{ 
   static String url = "http://localhost:8085/Desktop.ourServ";
   
   
   String msg = "";
   
   public void doPost(HttpServletRequest request, HttpServletResponse response) 
               throws ServletException, IOException 
   {
	   
	  HttpSession session = request.getSession(); 
	  
	  response.setContentType("text/html");
      PrintWriter out = response.getWriter();
      
      SimpleDateFormat formatter = new SimpleDateFormat("dd/MM/yyyy HH:mm");  
      Date date = new Date();  
      
      String name = request.getParameter("name");
      String email = request.getParameter("email");
      String comment = request.getParameter("message");
      
      String split_name[]= name.split(" ");
      
      session.setAttribute("fname", split_name[0]);
      session.setAttribute("lname", split_name[1]);
      session.setAttribute("Session_email", email);
      session.setAttribute("Session_message", comment);
      
      
      out.println("<html>");
      out.println("<head>"); 
      out.println("<meta name='description' >");
      out.println("<meta name='viewport' content='width=device-width, initial-scale=1'>");
      out.println("<link rel='apple-touch-icon' href='apple-touch-icon.png'>");

      

      out.println("<link rel='shortcut icon' href='img/page-icon.png'/>");

   
      out.println("<link href=\'https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900\' rel=\'stylesheet\'>");
      out.println("<link rel=stylesheet href='css/example-style.css' type='text/css'>");
      out.println("<link rel=stylesheet href='css/bootstrap.min.css\' type='text/css'>");
      out.println("<link rel=stylesheet href='css/bootstrap-theme.min.css' type='text/css'>");
      out.println("<link rel=stylesheet href='css/fontAwesome.css' type='text/css'>");
      out.println("<link rel=stylesheet href='css/templatemo-style.css; type='text/css'>");
      out.println("<link rel=stylesheet href='css/contact.css' type='text/css'>");
      out.println("<link rel='stylesheet' href='css/learnTable.css'>");
      
      
      out.println("</head>");  
      out.println("<body>");
      

      out.println("<div class='overlay'></div>");
      out.println("<section class='top-part'>");
    	  out.println("<img src='img/sad-dog.jpeg' />");
    	  out.println("</section>");
 
    	  out.println("<section class=\'cd-hero\'>");
    	  
    	  out.println("<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>");
	
    	  
    	  	//Center Box
    		out.println("<div class='container'>");
    		out.println("<div class='row'>");
    		out.println("<div class='col-md-12'>");
    		out.println("<div class='content first-content'>");
    			
    		
    		//Message
    	    out.println("<center><h1>Thank You For Your Comment " + session.getAttribute("fname") + "</h1></center>");
    	    out.println("<br/><br/>");
        out.println("<center><h5>You will be redirected back to the home page shortly.<h5></center>");
        out.println("<center><h5>Any reply will be directed to: " + session.getAttribute("Session_email") +  "<br/><h5></center>");
        out.println("<center>Your message (submitted on " + formatter.format(date)  +"): <br/></center>");
        out.println("<center> <i>" + session.getAttribute("Session_message") + "<i></center>");
    	    
    	      //Refresh
        out.println("<meta http-equiv='refresh' content='5;url=index.html' />");
          
          out.println("</div>");
          out.println("</div>");          
          out.println("</div>");
          out.println("</div>");      
 
      out.println("</body>"); 
      out.println("</html>");
      
      out.close();
   }
}




