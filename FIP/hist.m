a = imread('thanos.jpg');

b = rgb2gray(a);

c = histeq(b);

subplot(2,2,1), imshow(b), title('gray image')
subplot(2,2,2), imhist(b), title('gray histogram')
subplot(2,2,3), imshow(c), title('equalized')
subplot(2,2,4), imhist(c), title('equalized histogram')